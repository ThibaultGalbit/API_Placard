<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190710212351 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE documents ADD creation_date DATETIME NOT NULL, ADD update_date DATETIME NOT NULL, ADD deleted_date DATETIME DEFAULT NULL, DROP userId, DROP creationDate, DROP updateDate, CHANGE name name VARCHAR(255) NOT NULL, CHANGE categorie categorie VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE documents ADD userId VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD creationDate DATETIME NOT NULL, ADD updateDate DATETIME NOT NULL, DROP creation_date, DROP update_date, DROP deleted_date, CHANGE name name VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE categorie categorie VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
