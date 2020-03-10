create table catalog_information
(
    id          bigint unsigned auto_increment
        primary key,
    description varchar(255) not null,
    type        int          not null,
    active      tinyint(1)   not null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (1, 'Hombre', 1, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (2, 'Mujer', 1, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (3, 'Soltero', 2, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (4, 'Divorciado', 2, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (5, 'Casado', 2, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (6, 'Uni&oacute;n libre', 2, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (7, 'Preparatoria', 3, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (8, 'Licenciatura', 3, 1);
INSERT INTO unitec.catalog_information (id, description, type, active) VALUES (9, 'Posgrado', 3, 1);
create table catalogs
(
    id          bigint unsigned auto_increment
        primary key,
    description varchar(255) not null,
    active      tinyint(1)   not null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO unitec.catalogs (id, description, active) VALUES (1, 'Genero', 1);
INSERT INTO unitec.catalogs (id, description, active) VALUES (2, 'Estado Civil', 1);
INSERT INTO unitec.catalogs (id, description, active) VALUES (3, 'Nivel de Interes', 1);
create table migrations
(
    id        int unsigned auto_increment
        primary key,
    migration varchar(255) not null,
    batch     int          not null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO unitec.migrations (id, migration, batch) VALUES (1, '2014_10_12_000000_catalog_information_table', 1);
INSERT INTO unitec.migrations (id, migration, batch) VALUES (2, '2014_10_12_000000_catalogs_table', 1);
INSERT INTO unitec.migrations (id, migration, batch) VALUES (3, '2014_10_12_000000_create_users_table', 1);
INSERT INTO unitec.migrations (id, migration, batch) VALUES (4, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO unitec.migrations (id, migration, batch) VALUES (5, '2014_10_12_000000_student_table', 2);
create table password_resets
(
    email      varchar(255) not null,
    token      varchar(255) not null,
    created_at timestamp    null
)
    collate = utf8mb4_unicode_ci;

create index password_resets_email_index
    on password_resets (email);


create table student
(
    id            bigint unsigned auto_increment
        primary key,
    name          varchar(255) not null,
    last_name_dad varchar(255) not null,
    last_name_mom varchar(255) not null,
    email         varchar(255) not null,
    password      varchar(255) not null,
    age           int          not null,
    active        tinyint(1)   not null
)
    collate = utf8mb4_unicode_ci;

