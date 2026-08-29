<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260829081813 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add doctor contacts';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE doctor ADD contacts JSON NOT NULL AFTER information');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE doctor DROP contacts');
    }
}
