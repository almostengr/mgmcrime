<?php

declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Core\Configure;
use Cake\Core\Exception\CakeException;
use Exception;

/**
 * CrimesFromEmail command.
 */
final class CrimesFromEmailCommand extends Command
{
    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return int|null|void The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $connection = null;
        try {
            $hostName = Configure::read('emailHostname') ?? null;
            $userName = Configure::read('emailUserName') ?? null;
            $password = Configure::read('emailPassword') ?? null;

            if (is_null($hostName) || is_null($userName) || is_null($password)) {
                throw new CakeException("Invalid email credentials.");
            }

            // get unread emails
            $connection = imap_open($hostName, $userName, $password);

            $emails = imap_search($connection, 'ALL');

            if ($emails) {
                foreach ($emails as $emailNumber) {
                    // $overview = imap_fetch_overview($inbox, $emailNumber, 0);
                    $header = imap_fetchheader($connection, $emailNumber);

                    // if ()

                    $message = imap_fetchbody($connection, $emailNumber, 1);

                    // echo "Subject: " . $overview[0]->subject . "\n";
                    echo "Message: " . $message . "\n\n";
                }
            }

            // check that the email is from the Crime Mapping email address

            // parse the body of the email

            // load the data into the table

            // 
        } catch (Exception $exception) {
            $io->out($exception->getMessage());
        }

        if (!is_null($connection)) {
            imap_close($connection);
        }
    }
}
