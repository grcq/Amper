<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Helper\ProgressBar;

#[AsCommand(name: "user:create")]
class CreateUserCommand extends Command {

    protected static $defaultName = "user:create";

    private $entityManager;
    private $userPasswordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher) {
        $this->entityManager = $entityManager;
        $this->userPasswordHasher = $userPasswordHasher;

        parent::__construct();
    }

    protected function configure(): void {
        
    }

    public function execute(InputInterface $input, OutputInterface $output): int {

        $io = new SymfonyStyle($input, $output);

        $email = $io->ask("Email address");
        $username = $io->ask("Username");
        $password = $io->askHidden("Password");

        $progressBar = new ProgressBar($output, 3);
        $progressBar->setEmptyBarCharacter("░");
        $progressBar->setBarCharacter("▓");
        $progressBar->setProgressCharacter("░");
        $progressBar->setFormat("%current%/%max% [%bar%] %percent:3s%%\n%status:-45s%");

        $progressBar->setMessage("Validating email address...\n\n", "status");
        $progressBar->start();

        // Validate email address here...
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \RuntimeException("Email address validation failed. Please choose a valid email address.");
        }

        $progressBar->setMessage("Validating username...\n\n", "status");
        sleep(2);
        $progressBar->advance();

        // Validate username here...
        if (empty($username) || strlen($username) < 3 || strlen($username) > 32) {
            throw new \RuntimeException((empty($username) ? "Username cannot be empty." : "Username must be between 3 and 32 characters"));
        }
        
        $progressBar->setMessage("Validating password...\n\n", "status");
        sleep(2);
        $progressBar->advance();

        // Validate password here...
        if (empty($password) || strlen($password) < 6) {
            throw new \RuntimeException((empty($password) ? "Password cannot be empty." : "Password cannot be shorter than 6 characters."));
        }

        $progressBar->setMessage("Creating user...", "status");
        sleep(2);

        $user = new User();
        $user->setEmail($email);
        $user->setUsername($username);
        $user->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user,
                $password
            )
        );

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $progressBar->setMessage("Finished!", "status");
        $progressBar->finish();
        $io->success("\n\nUser has been created\n\n");

        return Command::SUCCESS;
    }

}