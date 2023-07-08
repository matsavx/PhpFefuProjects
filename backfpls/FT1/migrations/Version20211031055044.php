<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211031055044 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE delivery_drink ADD drink_volume INT DEFAULT NULL');
        $this->addSql('ALTER TABLE delivery_pizza ADD pizza_size INT DEFAULT NULL');
        $this->addSql('ALTER TABLE delivery_roll ADD roll_quantity INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE delivery_drink DROP drink_volume');
        $this->addSql('ALTER TABLE delivery_pizza DROP pizza_size');
        $this->addSql('ALTER TABLE delivery_roll DROP roll_quantity');
    }
}
