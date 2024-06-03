--
-- PostgreSQL database dump
--

-- Dumped from database version 16.2
-- Dumped by pg_dump version 16.2

-- Started on 2024-05-23 13:54:14

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 215 (class 1259 OID 24614)
-- Name: utilizatori; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.utilizatori (
    username character varying,
    parola character varying
);


ALTER TABLE public.utilizatori OWNER TO postgres;

--
-- TOC entry 4830 (class 0 OID 24614)
-- Dependencies: 215
-- Data for Name: utilizatori; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.utilizatori (username, parola) FROM stdin;
postgres	4123
postgres	4123
postgres	4123
34	123
51234	123
teste	test
marian	mar
gupia27@gmail.com	4123
5020211160000	parola
\.


-- Completed on 2024-05-23 13:54:14

--
-- PostgreSQL database dump complete
--

