<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200606015642 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE aliados DROP FOREIGN KEY aliados_ibfk_2');
        $this->addSql('DROP INDEX id_cliente ON aliados');
        $this->addSql('ALTER TABLE aliados CHANGE estado estado INT NOT NULL');
        $this->addSql('ALTER TABLE clientes CHANGE estado estado INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE aliados CHANGE estado estado INT DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE aliados ADD CONSTRAINT aliados_ibfk_2 FOREIGN KEY (id_cliente) REFERENCES clientes (id)');
        $this->addSql('CREATE INDEX id_cliente ON aliados (id_cliente)');
        $this->addSql('ALTER TABLE clientes CHANGE estado estado INT DEFAULT 1 NOT NULL');
    }
}
