CREATE TABLE filaments
( filament_id        integer        PRIMARY KEY
, filament_name      VARCHAR(255)
, filament_cost      numeric(10,2)
, filament_size      integer
, filament_diameter  numeric(10,2)
, filament_vendor    VARCHAR(255)
, filament_color     VARCHAR(255)
);

CREATE TABLE printers
( printer_id         integer        PRIMARY KEY
, printer_name       VARCHAR(255)
, is_dual            BOOLEAN
);

CREATE TABLE prints
( print_id           integer        PRIMARY KEY
, print_name         VARCHAR(255)
, filament_amount    integer
, stl_file_name      VARCHAR(255)
, print_start_time   time
, print_start_date   date
, print_end_time     time
, print_end_date     date
, printer_id         integer         REFERENCES printers(printer_id)
, filament_id        integer         REFERENCES filaments(filament_id)
);

CREATE TABLE notes
( note_id            integer         PRIMARY KEY
, note_fill          VARCHAR(255)
, print_id           integer         REFERENCES prints(print_id)
, created_by         integer
, creation_date      date
, last_updated_by    integer
, last_update_date   date 
);

INSERT INTO notes(
  note_id
, note_fill
, print_id
)
VALUES(
  1
, 'This print was ok but the walls were seperate from the infill'
, 1
),
( 2
, 'The print also had too high heat, plastic became too brittle'
, 1
),
( 3
, 'This print did not feed correctly, extruder_1 was too weak'
, 2
);

INSERT INTO prints(
  print_id
, print_name
, filament_amount
, stl_file_name
, printer_id
, filament_id
)
VALUES(
  1
, 'virtual_cube'
, 50
, 'virtual_cube.stl'
, 1
, 1
),
(
  2
, 'virtual_cube'
, 50
, 'virtual_cube.stl'
, 2
, 1
);

INSERT INTO printers(
  printer_id
, printer_name
, is_dual
)
VALUES(
  1
, 'ZoneStar 5-Key'
, true
),
( 2
, 'ZoneStar Knob'
, true
);



INSERT INTO filaments (
    filament_id
,   filament_name
,   filament_cost
,   filament_size
,   filament_diameter
,   filament_vendor
,   filament_color
)
VALUES (
    1
,   'Pure White'
,   20.00
,   2000
,   1.75
,   'Hatch box'
,   'White'
);