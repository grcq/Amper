<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'db:setup',
    description: 'Set up your database.',
)]
class DatabaseSetupCommand extends Command {
    protected function configure(): void {
        
    }

    protected function execute(InputInterface $input, OutputInterface $output): int {
        $io = new SymfonyStyle($input, $output);

        $address = $io->ask("Database IP Address", "127.0.0.1");
        $port = $io->ask("Database Port", 3306);
        $databaseName = $io->ask("Database Name", "amper");
        $username = $io->ask("Database Username", "amper");
        $password = $io->askHidden("Database Password");

        $this->edit("DATABASE_URL", '"mysql://' . $username . ":" . $password . "@" . $address . ":" . $port . "/" . $databaseName . '?serverVersion=8&charset=utf8mb4"');

        $io->success("Successfully updated the database environment values.");

        return Command::SUCCESS;
    }

    public function edit($var, $val){
        $path = str_replace("/src/Command", "", __DIR__);
        $content = file_get_contents($path . "/.env");
        $newContent = "";

        $lines = explode("\n", $content);
        foreach ($lines as $line) {
            $split = explode("=", $line);

            if ($split[0] == $var) {
                $newContent = $newContent . $split[0] . "=" . $val . "\n";
            } else {
                $newContent = $newContent . $line . "\n";
            }
        }

        shell_exec('cd '. $path . ' && echo "' . str_replace('"', '\"', $newContent) . '" > .env');
    }
}
