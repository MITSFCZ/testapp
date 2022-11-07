<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200930004407 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video ADD id_etablissement INT DEFAULT NULL, ADD id_formation INT DEFAULT NULL, ADD id_promotion INT DEFAULT NULL, ADD id_semestre INT DEFAULT NULL, ADD id_modulee INT DEFAULT NULL, ADD id_element INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video DROP id_etablissement, DROP id_formation, DROP id_promotion, DROP id_semestre, DROP id_modulee, DROP id_element');
    }
}
