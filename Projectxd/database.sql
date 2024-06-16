    -- Création de la base de données "test"
    DELETE DATABASE IF EXISTS test;
    CREATE DATABASE IF NOT EXISTS test;

    -- Utilisation de la base de données "test"
    USE test;

    -- Création de la table "users"
    CREATE TABLE users (
      id INT(11) NOT NULL AUTO_INCREMENT,
      firstname VARCHAR(50) NOT NULL,
      name VARCHAR(50) NOT NULL,
      username VARCHAR(50) NOT NULL,
      email VARCHAR(50) NOT NULL,
      password_hash VARCHAR(255) NOT NULL,
      country VARCHAR(50) NOT NULL,
      age INT(4) NOT NULL,
      created_at DATETIME DEFAULT CURRENT_TIMESTAMP(),
      updated_at DATETIME DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
      role VARCHAR(10) NOT NULL,
      PRIMARY KEY (id)
    );

    -- Création de la table "events"
    CREATE TABLE events (
      id INT(11) NOT NULL AUTO_INCREMENT,
      name VARCHAR(50) NOT NULL,
      description TEXT NOT NULL,
      start_datetime DATETIME NOT NULL,
      end_datetime DATETIME NOT NULL,
      min_players INT(11) NOT NULL,
      max_players INT(11) NOT NULL,
      status VARCHAR(20) NOT NULL,
      created_by INT(11) NOT NULL,
      requirements TEXT NOT NULL,
      type VARCHAR(15) NOT NULL,
      PRIMARY KEY (id)
    );

    -- Création de la table "teams"
    CREATE TABLE teams (
      id INT(11) NOT NULL AUTO_INCREMENT,
      name VARCHAR(50) NOT NULL,
      creator_id INT(11) NOT NULL,
      PRIMARY KEY (id)
    );

    -- Création de la table "participants"
    CREATE TABLE participants (
      id INT(11) NOT NULL AUTO_INCREMENT,
      event_id INT(11) NOT NULL,
      user_id INT(11) NOT NULL,
      team_id INT(11) NOT NULL,
      position INT(3) NOT NULL,
      points INT(3) NOT NULL CHECK (points BETWEEN 0 AND 999),
      PRIMARY KEY (id)
    );

    -- Création de la table "votes"
    CREATE TABLE votes (
      id INT(11) NOT NULL AUTO_INCREMENT,
      event_id INT(11) NOT NULL,
      user_id INT(11) NOT NULL,
      team_id INT(11) NOT NULL,
      PRIMARY KEY (id)
    );

    -- Création de la table "results"
    CREATE TABLE results (
      id INT(11) NOT NULL AUTO_INCREMENT,
      event_id INT(11) NOT NULL,
      participant_id INT(11) NOT NULL,
      team_id INT(11) NOT NULL,
      PRIMARY KEY (id)
    );

    -- Création de la table "team_members"
    CREATE TABLE team_members (
      id INT(11) NOT NULL AUTO_INCREMENT,
      team_id INT(11) NOT NULL,
      user_id INT(11) NOT NULL,
      PRIMARY KEY (id)
    );

    -- Insertion d'un user par défaut
    INSERT INTO `users` (`id`, `firstname`, `name`,`username`,`email`,`password_hash`,`country`,`created_at`, `updated_at`, `role`)
    VALUES (1, 'TRAN', 'Duy Quang', 'Xenor', 'xstylefatalm@gmail.com', '$2y$10$FXWAt/mx03rTnpU4jvs/I.CLZf51k1oEEkZ0CFCCB248w4W4Isabu', 'France', '2024-03-31 16:45:49', '2024-03-31 16:45:49', 'admin');
    -- Ajout des contraintes de clé étrangère

    -- Lier la table "events" à la table "users"
    ALTER TABLE events ADD CONSTRAINT fk_events_created_by FOREIGN KEY (created_by) REFERENCES users(id);

    -- Lier la table "teams" à la table "users"
    ALTER TABLE teams ADD CONSTRAINT fk_teams_creator_id FOREIGN KEY (creator_id) REFERENCES users(id);

    -- Lier la table "participants" à la table "events"
    ALTER TABLE participants ADD CONSTRAINT fk_participants_event_id FOREIGN KEY (event_id) REFERENCES events(id);

    -- Lier la table "participants" à la table "users"
    ALTER TABLE participants ADD CONSTRAINT fk_participants_user_id FOREIGN KEY (user_id) REFERENCES users(id);

    -- Lier la table "participants" à la table "teams"
    ALTER TABLE participants ADD CONSTRAINT fk_participants_team_id FOREIGN KEY (team_id) REFERENCES teams(id);

    -- Lier la table "votes" à la table "events"
    ALTER TABLE votes ADD CONSTRAINT fk_votes_event_id FOREIGN KEY (event_id) REFERENCES events(id);

    -- Lier la table "votes" à la table "users"
    ALTER TABLE votes ADD CONSTRAINT fk_votes_user_id FOREIGN KEY (user_id) REFERENCES users(id);

    -- Lier la table "votes" à la table "teams"
    ALTER TABLE votes ADD CONSTRAINT fk_votes_team_id FOREIGN KEY (team_id) REFERENCES teams(id);

    -- Lier la table "results" à la table "events"
    ALTER TABLE results ADD CONSTRAINT fk_results_event_id FOREIGN KEY (event_id) REFERENCES events(id);

    -- Lier la table "results" à la table "participants"
    ALTER TABLE results ADD CONSTRAINT fk_results_participant_id FOREIGN KEY (participant_id) REFERENCES participants(id);

    -- Lier la table "results" à la table "teams"
    ALTER TABLE results ADD CONSTRAINT fk_results_team_id FOREIGN KEY (team_id) REFERENCES teams(id);

    -- Lier la table "team_members" à la table "teams"
    ALTER TABLE team_members ADD CONSTRAINT fk_team_members_team_id FOREIGN KEY (team_id) REFERENCES teams(id);

    -- Lier la table "team_members" à la table "users"
    ALTER TABLE team_members ADD CONSTRAINT fk_team_members_user_id FOREIGN KEY (user_id) REFERENCES users(id);

    -- Ajout des index

    -- Ajout d'un index pour la colonne "created_by" dans la table "events"
    CREATE INDEX idx_events_created_by ON events(created_by);

    -- Ajout d'un index pour la colonne "creator_id" dans la table "teams"
    CREATE INDEX idx_teams_creator_id ON teams(creator_id);

    -- Ajout d'un index pour la colonne "event_id" dans la table "participants"
    CREATE INDEX idx_participants_event_id ON participants(event_id);

    -- Ajout d'un index pour la colonne "user_id" dans la table "participants"
    CREATE INDEX idx_participants_user_id ON participants(user_id);

    -- Ajout d'un index pour la colonne "team_id" dans la table "participants"
    CREATE INDEX idx_participants_team_id ON participants(team_id);

    -- Ajout d'un index pour la colonne "event_id" dans la table "votes"
    CREATE INDEX idx_votes_event_id ON votes(event_id);

    -- Ajout d'un index pour la colonne "user_id" dans la table "votes"
    CREATE INDEX idx_votes_user_id ON votes(user_id);

    -- Ajout d'un index pour la colonne "team_id" dans la table "votes"
    CREATE INDEX idx_votes_team_id ON votes(team_id);

    -- Ajout d'un index pour la colonne "event_id" dans la table "results"
    CREATE INDEX idx_results_event_id ON results(event_id);

    -- Ajout d'un index pour la colonne "participant_id" dans la table "results"
    CREATE INDEX idx_results_participant_id ON results(participant_id);

    -- Ajout d'un index pour la colonne "team_id" dans la table "results"
    CREATE INDEX idx_results_team_id ON results(team_id);

    -- Ajout d'un index pour la colonne "team_id" dans la table "team_members"
    CREATE INDEX idx_team_members_team_id ON team_members(team_id);

    -- Ajout d'un index pour la colonne "user_id" dans la table "team_members"
    CREATE INDEX idx_team_members_user_id ON team_members(user_id);
