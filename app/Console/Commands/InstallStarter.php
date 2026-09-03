<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallStarter extends Command
{
    protected $signature = 'starter:install
        {--name= : Application name}
        {--registration= : Enable public registration (yes/no)}
        {--verification= : Require email verification (yes/no)}';

    protected $description = 'Configure the starter for a new application';

    public function handle(): int
    {
        $name = $this->option('name');

        if (! is_string($name) || trim($name) === '') {
            $name = $this->input->isInteractive()
                ? $this->ask('Application name', config('app.name', 'Laravel Application'))
                : config('app.name', 'Laravel Application');
        }

        $registration = $this->resolveBooleanOption(
            'registration',
            'Enable public registration?',
            true,
        );

        $verification = $this->resolveBooleanOption(
            'verification',
            'Require email verification?',
            true,
        );

        $this->setEnvironmentValue('APP_NAME', $this->quoteEnvironmentValue(trim((string) $name)));
        $this->setEnvironmentValue('FORTIFY_REGISTRATION', $registration ? 'true' : 'false');
        $this->setEnvironmentValue('FORTIFY_EMAIL_VERIFICATION', $verification ? 'true' : 'false');

        $this->callSilent('config:clear');

        $this->newLine();
        $this->components->info('Starter configuration updated.');
        $this->line('Application: '.trim((string) $name));
        $this->line('Public registration: '.($registration ? 'enabled' : 'disabled'));
        $this->line('Email verification: '.($verification ? 'required' : 'not required'));

        return self::SUCCESS;
    }

    private function resolveBooleanOption(string $option, string $question, bool $default): bool
    {
        $value = $this->option($option);

        if (is_string($value) && $value !== '') {
            return match (strtolower(trim($value))) {
                '1', 'true', 'yes', 'y', 'on' => true,
                '0', 'false', 'no', 'n', 'off' => false,
                default => $this->invalidBooleanOption($option, $value),
            };
        }

        if (! $this->input->isInteractive()) {
            return $default;
        }

        return $this->confirm($question, $default);
    }

    private function invalidBooleanOption(string $option, string $value): never
    {
        throw new \InvalidArgumentException("Invalid --{$option} value [{$value}]. Use yes or no.");
    }

    private function setEnvironmentValue(string $key, string $value): void
    {
        $path = base_path('.env');

        if (! file_exists($path)) {
            copy(base_path('.env.example'), $path);
        }

        $contents = file_get_contents($path);

        if ($contents === false) {
            throw new \RuntimeException('Unable to read the .env file.');
        }

        $pattern = '/^'.preg_quote($key, '/').'=.*/m';
        $replacement = $key.'='.$value;

        if (preg_match($pattern, $contents) === 1) {
            $contents = (string) preg_replace($pattern, $replacement, $contents, 1);
        } else {
            $contents = rtrim($contents).PHP_EOL.$replacement.PHP_EOL;
        }

        if (file_put_contents($path, $contents) === false) {
            throw new \RuntimeException('Unable to update the .env file.');
        }
    }

    private function quoteEnvironmentValue(string $value): string
    {
        return '"'.str_replace(['\\', '"'], ['\\\\', '\\"'], $value).'"';
    }
}
