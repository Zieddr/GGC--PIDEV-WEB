<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407213339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE idClient idClient INT NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE idCommande idCommande INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE idCommentaire idCommentaire INT NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE reference reference INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE lignecommande CHANGE idLigne idLigne INT NOT NULL');
        $this->addSql('ALTER TABLE livraison CHANGE idCommande idCommande INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE livreur CHANGE idLivreur idLivreur INT NOT NULL');
        $this->addSql('ALTER TABLE moderateur CHANGE id_moderateur id_moderateur INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE participation MODIFY idParticipation INT NOT NULL');
        $this->addSql('ALTER TABLE participation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE participation CHANGE idParticipation idParticipation INT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD PRIMARY KEY (idParticipation, idEvent, idClient)');
        $this->addSql('ALTER TABLE plan CHANGE idPlan idPlan INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE streamer CHANGE idStreamer idStreamer INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE idClient idClient INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commande CHANGE idCommande idCommande INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE idCommentaire idCommentaire INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE reference reference INT NOT NULL');
        $this->addSql('ALTER TABLE lignecommande CHANGE idLigne idLigne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE livraison CHANGE idCommande idCommande INT NOT NULL');
        $this->addSql('ALTER TABLE livreur CHANGE idLivreur idLivreur INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE moderateur CHANGE id_moderateur id_moderateur INT NOT NULL');
        $this->addSql('ALTER TABLE participation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE participation CHANGE idParticipation idParticipation INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD PRIMARY KEY (idParticipation, idClient, idEvent)');
        $this->addSql('ALTER TABLE plan CHANGE idPlan idPlan INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE produit DROP img');
        $this->addSql('ALTER TABLE streamer CHANGE idStreamer idStreamer INT AUTO_INCREMENT NOT NULL');
    }
}
