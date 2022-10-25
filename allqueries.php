<?php 
$table_creation ="CREATE TABLE jadcherla
(
    masjid_id int AUTO_INCREMENT,
    masjid_name varchar(50),
    fajar varchar(6),
    zohar varchar(6),
    asar varchar(6),
    magrib varchar(6),
    isha varchar(6),
    jumma varchar(6),
    profileimg varchar(100),
    location varchar(100),
    map varchar(100),
    PRIMARY KEY(masjid_id),
    ADD FOREIGN KEY(timings) REFERENCES namaz_timings(MASJID_id)
)";

$t ="INSERT INTO `masjid_members` (`masjid_id`, `masjid_name`, `masjid_password`, `profileimg`, `location`, `map`) VALUES 
('50930101', 'memon masjid', '123', NULL, ' Netaji X Road (Netaji Statue) and Badepally Express Bus Station of Badepally\r\n', NULL), 
('50930102', 'maccah masjid', '123', NULL, 'Railway Station Road, Badepally\r\n', NULL);"

$t2 ="CREATE TABLE namaz_timings
(
    MASJID_id int,
    azan_fajar varchar(6),
    azan_zohar varchar(6),
    azan_asar varchar(6),
    azan_magrib varchar(6),
    azan_isha varchar(6),
    azan_jumma varchar(6),
    fajar varchar(6),
    zohar varchar(6),
    asar varchar(6),
    magrib varchar(6),
    isha varchar(6),
    jumma varchar(6),
    PRIMARY KEY(masjid_id)
)";

$t3 ="CREATE TABLE countTable
(
    id int AUTO_INCREMENT,
    masjid_count int,
    PRIMARY KEY(id)
)";

$t4="
CREATE TABLE noticeboard
(
   masjid_id int,
  day DATE,
  time varchar(10),
  notice varchar(200),
  PRIMARY KEY(masjid_id)
)
"
?>