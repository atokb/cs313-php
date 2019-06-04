-- Table: public.body_building

-- DROP TABLE public.body_building;

CREATE TABLE public.body_building
(
    "body_buildingID" integer NOT NULL DEFAULT nextval('"body_building_body_buildingID_seq"'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    "body_building_desc." character varying(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT body_building_pkey PRIMARY KEY ("body_buildingID")
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.body_building
    OWNER to postgres;

-- Table: public.goals

-- DROP TABLE public.goals;

CREATE TABLE public.goals
(
    "goalsID" integer NOT NULL DEFAULT nextval('"goals_goalsID_seq"'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    "weight_lossID" integer NOT NULL,
    "body_buildingID" integer NOT NULL,
    "healthy_livingID" integer NOT NULL,
    CONSTRAINT goals_pkey PRIMARY KEY ("goalsID")
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.goals
    OWNER to postgres;

-- Table: public.healthy_living

-- DROP TABLE public.healthy_living;

CREATE TABLE public.healthy_living
(
    "healthy_livingID" integer NOT NULL DEFAULT nextval('"healthy_living_healthy_livingID_seq"'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    healthy_living_desc character varying(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT healthy_living_pkey PRIMARY KEY ("healthy_livingID")
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.healthy_living
    OWNER to postgres;

-- Table: public.routines

-- DROP TABLE public.routines;

CREATE TABLE public.routines
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

ALTER TABLE public.routines
    OWNER to postgres;

-- Table: public."user"

-- DROP TABLE public."user";

CREATE TABLE public."user"
(
    "userID" integer NOT NULL DEFAULT nextval('"user_userID_seq"'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    first_name "char"[] NOT NULL,
    last_name "char"[] NOT NULL,
    age integer[] NOT NULL,
    "weightID" integer NOT NULL,
    "routineID" integer NOT NULL,
    "goalID" integer NOT NULL,
    CONSTRAINT user_pkey PRIMARY KEY ("userID"),
    CONSTRAINT "goalID" FOREIGN KEY ("goalID")
        REFERENCES public.goals ("goalsID") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "routineID" FOREIGN KEY ("routineID")
        REFERENCES public.routines ("routinesID") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "weightID" FOREIGN KEY ("weightID")
        REFERENCES public.weight_category ("weightID") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public."user"
    OWNER to postgres;

-- Index: fki_goalID

-- DROP INDEX public."fki_goalID";

CREATE INDEX "fki_goalID"
    ON public."user" USING btree
    ("goalID")
    TABLESPACE pg_default;

-- Index: fki_routineID

-- DROP INDEX public."fki_routineID";

CREATE INDEX "fki_routineID"
    ON public."user" USING btree
    ("routineID")
    TABLESPACE pg_default;

-- Index: fki_weightID

-- DROP INDEX public."fki_weightID";

CREATE INDEX "fki_weightID"
    ON public."user" USING btree
    ("weightID")
    TABLESPACE pg_default;

-- Table: public.weight_category

-- DROP TABLE public.weight_category;

CREATE TABLE public.weight_category
(
    "weightID" integer NOT NULL DEFAULT nextval('"weight_category_weightID_seq"'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    "90-120" character varying COLLATE pg_catalog."default" NOT NULL,
    "120-150" character varying COLLATE pg_catalog."default" NOT NULL,
    "150-180" character varying COLLATE pg_catalog."default" NOT NULL,
    "180-200" character varying COLLATE pg_catalog."default" NOT NULL,
    "200+" character varying COLLATE pg_catalog."default",
    CONSTRAINT weight_category_pkey PRIMARY KEY ("weightID")
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.weight_category
    OWNER to postgres;

-- Table: public.weight_loss

-- DROP TABLE public.weight_loss;

CREATE TABLE public.weight_loss
(
    "weight_lossID" integer NOT NULL DEFAULT nextval('"weight_loss_weight_lossID_seq"'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    "weight_loss_desc." character varying(50) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT weight_loss_pkey PRIMARY KEY ("weight_lossID")
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.weight_loss
    OWNER to postgres;
    