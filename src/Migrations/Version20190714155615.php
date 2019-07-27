<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190714155615 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE document');
        $this->addSql('ALTER TABLE document_test DROP FOREIGN KEY FK_7FCBF29F9D86650F');
        $this->addSql('DROP INDEX IDX_7FCBF29F9D86650F ON document_test');
        $this->addSql('ALTER TABLE document_test ADD user_id_id INT NOT NULL, DROP userId');
        $this->addSql('ALTER TABLE document_test ADD CONSTRAINT FK_7FCBF29F9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7FCBF29F9D86650F ON document_test (user_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, categorie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, number INT DEFAULT NULL, user_id INT DEFAULT NULL, creation_date DATETIME NOT NULL, update_date DATETIME NOT NULL, deleted_date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE document_test DROP FOREIGN KEY FK_7FCBF29F9D86650F');
        $this->addSql('DROP INDEX IDX_7FCBF29F9D86650F ON document_test');
        $this->addSql('ALTER TABLE document_test ADD userId INT DEFAULT NULL, DROP user_id_id');
        $this->addSql('ALTER TABLE document_test ADD CONSTRAINT FK_7FCBF29F9D86650F FOREIGN KEY (userId) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7FCBF29F9D86650F ON document_test (userId)');
    }
}
