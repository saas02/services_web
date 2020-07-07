<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200707012749 extends AbstractMigration
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
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY producto_ibfk_1');
        $this->addSql('DROP INDEX id_cliente ON producto');
        $this->addSql('ALTER TABLE producto CHANGE codigo codigo VARCHAR(50) NOT NULL, CHANGE nombre nombre VARCHAR(50) NOT NULL, CHANGE descripcion descripcion LONGTEXT NOT NULL, CHANGE in_home in_home INT NOT NULL, CHANGE in_promo in_promo INT NOT NULL, CHANGE estado estado INT NOT NULL, CHANGE creacion creacion DATETIME NOT NULL, CHANGE actualizacion actualizacion DATETIME NOT NULL');
        $this->addSql('ALTER TABLE redes_notificaciones DROP FOREIGN KEY id_redes_notificaciones_id_cliente');
        $this->addSql('DROP INDEX id_cliente ON redes_notificaciones');
        $this->addSql('ALTER TABLE redes_notificaciones CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE total total INT DEFAULT NULL, CHANGE fecha fecha DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE aliados CHANGE estado estado INT DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE aliados ADD CONSTRAINT aliados_ibfk_2 FOREIGN KEY (id_cliente) REFERENCES clientes (id)');
        $this->addSql('CREATE INDEX id_cliente ON aliados (id_cliente)');
        $this->addSql('ALTER TABLE clientes CHANGE estado estado INT DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE producto CHANGE codigo codigo VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, CHANGE nombre nombre VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, CHANGE descripcion descripcion TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE in_home in_home INT DEFAULT NULL, CHANGE in_promo in_promo INT DEFAULT NULL, CHANGE estado estado INT DEFAULT 1 NOT NULL, CHANGE creacion creacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE actualizacion actualizacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT producto_ibfk_1 FOREIGN KEY (id_cliente) REFERENCES clientes (id) ON UPDATE CASCADE');
        $this->addSql('CREATE INDEX id_cliente ON producto (id_cliente)');
        $this->addSql('ALTER TABLE redes_notificaciones CHANGE id id INT NOT NULL, CHANGE total total INT NOT NULL, CHANGE fecha fecha DATETIME NOT NULL');
        $this->addSql('ALTER TABLE redes_notificaciones ADD CONSTRAINT id_redes_notificaciones_id_cliente FOREIGN KEY (id_cliente) REFERENCES clientes (id)');
        $this->addSql('CREATE INDEX id_cliente ON redes_notificaciones (id_cliente)');
    }
}
