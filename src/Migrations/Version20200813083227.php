<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813083227 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE declarations (id INT AUTO_INCREMENT NOT NULL, civility VARCHAR(7) NOT NULL, nom VARCHAR(255) NOT NULL, prenoms VARCHAR(255) NOT NULL, tel VARCHAR(16) NOT NULL, email VARCHAR(255) NOT NULL, num_contrat VARCHAR(255) NOT NULL, num_client VARCHAR(255) NOT NULL, date_sin DATE NOT NULL, heure_sin TIME NOT NULL, agence VARCHAR(255) DEFAULT NULL, type_contrat VARCHAR(255) NOT NULL, chocked TINYINT(1) NOT NULL, circonstances LONGTEXT NOT NULL, dommages LONGTEXT NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE declarations');
    }
}
