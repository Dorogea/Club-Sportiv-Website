--
-- PostgreSQL database dump
--

-- Dumped from database version 16.2
-- Dumped by pg_dump version 16.2

-- Started on 2024-05-12 11:58:02

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: pg_database_owner
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO pg_database_owner;

--
-- TOC entry 4856 (class 0 OID 0)
-- Dependencies: 4
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: pg_database_owner
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 218 (class 1259 OID 24595)
-- Name: admini; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.admini (
    id integer NOT NULL,
    username character varying NOT NULL,
    password character varying NOT NULL
);


ALTER TABLE public.admini OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 24594)
-- Name: admini_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.admini_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.admini_id_seq OWNER TO postgres;

--
-- TOC entry 4857 (class 0 OID 0)
-- Dependencies: 217
-- Name: admini_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.admini_id_seq OWNED BY public.admini.id;


--
-- TOC entry 216 (class 1259 OID 24586)
-- Name: anunturi; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.anunturi (
    id integer NOT NULL,
    titlu character varying NOT NULL,
    descriere text NOT NULL,
    data_publicare date NOT NULL
);


ALTER TABLE public.anunturi OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 24585)
-- Name: anunturi_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.anunturi_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.anunturi_id_seq OWNER TO postgres;

--
-- TOC entry 4858 (class 0 OID 0)
-- Dependencies: 215
-- Name: anunturi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.anunturi_id_seq OWNED BY public.anunturi.id;


--
-- TOC entry 219 (class 1259 OID 24608)
-- Name: echipa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.echipa (
    id integer,
    nume character varying,
    prenume character varying
);


ALTER TABLE public.echipa OWNER TO postgres;

--
-- TOC entry 4698 (class 2604 OID 24598)
-- Name: admini id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admini ALTER COLUMN id SET DEFAULT nextval('public.admini_id_seq'::regclass);


--
-- TOC entry 4697 (class 2604 OID 24589)
-- Name: anunturi id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.anunturi ALTER COLUMN id SET DEFAULT nextval('public.anunturi_id_seq'::regclass);


--
-- TOC entry 4849 (class 0 OID 24595)
-- Dependencies: 218
-- Data for Name: admini; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.admini (id, username, password) FROM stdin;
1	admin	4123
2	mehi	4123
3	marian	4123
4	1234	4123
5	oli	4123
6	rico	4123
\.


--
-- TOC entry 4847 (class 0 OID 24586)
-- Dependencies: 216
-- Data for Name: anunturi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.anunturi (id, titlu, descriere, data_publicare) FROM stdin;
6	Test	Test	2024-05-11
\.


--
-- TOC entry 4850 (class 0 OID 24608)
-- Dependencies: 219
-- Data for Name: echipa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.echipa (id, nume, prenume) FROM stdin;
69	Oliver	Pusti
38	Rico	Dark
\.


--
-- TOC entry 4859 (class 0 OID 0)
-- Dependencies: 217
-- Name: admini_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.admini_id_seq', 1, true);


--
-- TOC entry 4860 (class 0 OID 0)
-- Dependencies: 215
-- Name: anunturi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.anunturi_id_seq', 3, true);


--
-- TOC entry 4702 (class 2606 OID 24602)
-- Name: admini admini_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admini
    ADD CONSTRAINT admini_pkey PRIMARY KEY (id);


--
-- TOC entry 4700 (class 2606 OID 24593)
-- Name: anunturi anunturi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.anunturi
    ADD CONSTRAINT anunturi_pkey PRIMARY KEY (id);


-- Completed on 2024-05-12 11:58:03

--
-- PostgreSQL database dump complete
--

