<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200606024140 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE parameters DROP name, DROP value, DROP description, DROP status');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY producto_ibfk_1');
        $this->addSql('DROP INDEX id_cliente ON producto');
        $this->addSql('ALTER TABLE producto DROP id_cliente, DROP codigo, DROP nombre, DROP descripcion, DROP precio, DROP fotos, DROP in_home, DROP in_promo, DROP estado, DROP creacion, DROP actualizacion');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE parameters ADD name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, ADD value TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, ADD description VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, ADD status INT NOT NULL');
        $this->addSql('ALTER TABLE producto ADD id_cliente INT NOT NULL, ADD codigo VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, ADD nombre VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, ADD descripcion TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_spanish_ci`, ADD precio NUMERIC(30, 0) NOT NULL, ADD fotos TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_spanish_ci`, ADD in_home INT DEFAULT NULL, ADD in_promo INT DEFAULT NULL, ADD estado INT DEFAULT 1 NOT NULL, ADD creacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, ADD actualizacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT producto_ibfk_1 FOREIGN KEY (id_cliente) REFERENCES clientes (id) ON UPDATE CASCADE');
        $this->addSql('CREATE INDEX id_cliente ON producto (id_cliente)');
    }
}
