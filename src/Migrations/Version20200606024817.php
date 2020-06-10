<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200606024817 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY producto_ibfk_1');
        $this->addSql('DROP INDEX id_cliente ON producto');
        $this->addSql('ALTER TABLE producto CHANGE codigo codigo VARCHAR(50) NOT NULL, CHANGE nombre nombre VARCHAR(50) NOT NULL, CHANGE descripcion descripcion LONGTEXT NOT NULL, CHANGE in_home in_home INT NOT NULL, CHANGE in_promo in_promo INT NOT NULL, CHANGE estado estado INT NOT NULL, CHANGE creacion creacion DATETIME NOT NULL, CHANGE actualizacion actualizacion DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE producto CHANGE codigo codigo VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, CHANGE nombre nombre VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, CHANGE descripcion descripcion TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE in_home in_home INT DEFAULT NULL, CHANGE in_promo in_promo INT DEFAULT NULL, CHANGE estado estado INT DEFAULT 1 NOT NULL, CHANGE creacion creacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE actualizacion actualizacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT producto_ibfk_1 FOREIGN KEY (id_cliente) REFERENCES clientes (id) ON UPDATE CASCADE');
        $this->addSql('CREATE INDEX id_cliente ON producto (id_cliente)');
    }
}
