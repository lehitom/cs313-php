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