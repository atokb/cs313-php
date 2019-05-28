-- Table: public."Routines"

-- DROP TABLE public."Routines";

CREATE TABLE public."Routines"
(
    "routinesID" integer NOT NULL DEFAULT nextval('"Routines_routinesID_seq"'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    routine_name "char"[] NOT NULL,
    routine_instruction "char"[] NOT NULL,
    CONSTRAINT "Routines_pkey" PRIMARY KEY ("routinesID")
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public."Routines"
    OWNER to postgres;