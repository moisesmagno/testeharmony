-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2014 às 16:46
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `harmony`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(70) NOT NULL,
  `cli_email` varchar(70) DEFAULT NULL,
  `cli_site` varchar(70) DEFAULT NULL,
  `cli_ufid` int(11) NOT NULL,
  `cli_cidade` varchar(70) DEFAULT NULL,
  `cli_endereco` varchar(100) DEFAULT NULL,
  `cli_complemento` varchar(20) DEFAULT NULL,
  `cli_bairro` varchar(70) DEFAULT NULL,
  `cli_cep` varchar(9) DEFAULT NULL,
  `cli_pontoreferencia` text,
  `cli_logotipo` varchar(100) DEFAULT NULL,
  `cli_destaque` int(11) NOT NULL,
  `cli_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`cli_id`),
  KEY `fk_id_estado` (`cli_ufid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cli_id`, `cli_nome`, `cli_email`, `cli_site`, `cli_ufid`, `cli_cidade`, `cli_endereco`, `cli_complemento`, `cli_bairro`, `cli_cep`, `cli_pontoreferencia`, `cli_logotipo`, `cli_destaque`, `cli_status`, `created_at`, `updated_at`) VALUES
(1, 'Hermes Pardini', NULL, 'www3.hermespardini.com.br', 13, 'Vespasiano', 'Avenida das Nações, 2448', NULL, 'Distrito Industrial', '33200-000', NULL, 'pardini.jpg', 1, 1, '2014-12-11 02:24:13', '0000-00-00 00:00:00'),
(2, 'Unidade Constituição', NULL, 'www.sabinonline.com.br', 13, 'Uberaba', 'Rua da Constituição, 750', NULL, 'Ns. da Abadia', '38025-110', NULL, 'sabin.jpg', 1, 1, '2014-12-11 02:24:24', '0000-00-00 00:00:00'),
(3, 'Afip', NULL, 'www.afip.com.br/', 26, 'São Paulo', 'Rua Marselhesa, 500', NULL, 'Vila Clementino', '04020-060', NULL, 'afip.jpg', 1, 1, '2014-12-11 14:44:34', '0000-00-00 00:00:00'),
(4, 'Labor Labis', NULL, 'www.laborlabis.com.br', 26, 'São Paulo', 'Avenida Brigadeiro Luis Antonio, 4967', NULL, 'Jardim Paulista', '01401-002', NULL, 'labor_labis.jpg', 1, 1, '2014-12-11 02:24:52', '0000-00-00 00:00:00'),
(5, 'Femina Diagnóstico', 'contato@labfemina.com.br', 'www.labfemina.com.br', 21, 'Caxias do Sul', 'Rua Marechal Floriano, 555', 'Sala 303', 'Centro', '95020-371', NULL, 'femina.jpg', 1, 1, '2014-12-11 02:24:56', '0000-00-00 00:00:00'),
(6, 'Ecofetal', 'contato@ecofetal.com.br', 'www.ecofetal.com.br', 21, 'Porto Alegre', 'Avenida Princesa Isabel, 729 / 505 ', NULL, 'Santana', '90620-001', NULL, 'ecofetal.jpg', 1, 1, '2014-12-11 02:25:00', '0000-00-00 00:00:00'),
(7, 'Centro de Diagnóstico da Mulher', NULL, 'www.cdmmulher.com.br', 24, 'Itajaí', 'Rua Zózimo José Peixoto, 166', NULL, 'Centro', '88303-011', NULL, 'cdm.jpg', 1, 1, '2014-12-11 02:25:03', '0000-00-00 00:00:00'),
(8, 'DNA - Unidade Rio Vermelho', NULL, 'www.dnagenetica.com.br', 5, 'Salvador', 'Rua Oswaldo Cruz,480', NULL, 'Rio Vermelho', '41940-000', NULL, 'dna.jpg', 1, 1, '2014-12-11 02:25:09', '0000-00-00 00:00:00'),
(9, 'Clínica Prodimagem', NULL, 'www.sabinonline.com.br', 4, 'Manaus', 'Rua Tapajós, 685', NULL, 'Centro ', '69010-150', NULL, 'sabin.jpg', 0, 1, '2014-09-05 20:19:09', '0000-00-00 00:00:00'),
(11, 'Laboratorio Colares', NULL, NULL, 3, 'Macapá', 'Av. Padre Júlio Maria Lombard, 2674', NULL, 'Santa Rita', '68900-030', NULL, 'avatar.jpg', 0, 1, '2014-09-08 13:20:36', '0000-00-00 00:00:00'),
(12, 'Laboratorio Paulo Albuquerque', NULL, 'www.labpauloalbuquerque.com.br', 3, 'Macapá', 'Rua Leopoldo Machado, 1808', NULL, 'Centro', '68901-130', NULL, 'avatar.jpg', 0, 1, '2014-09-08 13:20:36', '0000-00-00 00:00:00'),
(13, 'Sabin - Brasília Shopping ', NULL, 'www.sabinonline.com.br', 7, 'Brasilia', 'Centro empresarial Brasília Shopping, Torre Sul, 1° andar, SCN Quadra 05 Bloco A Sala 101/104', NULL, 'Asa Norte ', NULL, NULL, 'sabin.jpg', 0, 1, '2014-09-08 19:16:31', '0000-00-00 00:00:00'),
(14, 'Clinus', NULL, 'www.clinus.com.br/', 24, 'Florianópolis', 'Av. Rio Branco, 404', 'Torre 2 - Sala 206', 'Centro', '88015-204', NULL, 'clinus.jpg', 1, 1, '2014-12-11 02:25:24', '0000-00-00 00:00:00'),
(15, 'Fertile Diagnosticos', 'fertile@fertile.com.br', 'www.fertile.com.br', 9, 'Goiânia', 'Al. Cel. Joaquim Bastos, 243', NULL, 'Setor Marista', '74175-150', NULL, 'fertile.jpg', 1, 1, '2014-12-11 02:25:29', '0000-00-00 00:00:00'),
(16, 'Richet', NULL, 'www.richet.com.br/', 19, 'Rio de Janeiro', 'Av. das Américas, 4801', 'Loja D', 'Barra da Tijuca', '22631-004', NULL, 'richet.jpg', 1, 0, '2014-12-11 14:44:01', '0000-00-00 00:00:00'),
(17, 'Pasteur Medicina Diagnóstica', NULL, 'www.pasteur.com.br', 26, 'Santos', 'Avenida Ana Costa, 424', NULL, 'Gonzaga', '11060-002', NULL, 'avatar.jpg', 0, 1, '2014-09-11 19:08:02', '0000-00-00 00:00:00'),
(18, 'IACS', NULL, 'www.iacs.com.br\r\n', 26, 'Santos', 'AV.Ana Costa, 402\r\n', NULL, 'Gonzaga', '11050-030', NULL, 'avatar.jpg', 0, 1, '2014-09-11 17:12:26', '0000-00-00 00:00:00'),
(19, 'Lab Analises Cli Oswaldo Cruz', NULL, NULL, 26, 'Taubaté', 'R. Dr. Urbano Figueira, 100', NULL, 'Centro', '12020-140', NULL, 'avatar.jpg', 0, 1, '2014-09-11 18:22:18', '0000-00-00 00:00:00'),
(20, 'Dr. Baccili Serviços Médio-Hospitalares', NULL, NULL, 26, 'Campinas', 'Av. Andrade Neves, 699', NULL, 'Botafogo', '13020-070', NULL, 'avatar.jpg', 0, 1, '2014-09-11 18:33:40', '0000-00-00 00:00:00'),
(21, 'Lab Hormon', NULL, 'www.labhormon.com.br', 26, 'Santo André', 'AV. Dom Pedro II, 193', NULL, 'Jardim', '09080-110', NULL, '1417643906.jpg', 1, 0, '2014-12-11 14:44:41', '0000-00-00 00:00:00'),
(22, 'Microclin Microbiologia Clínica', NULL, NULL, 26, 'Taubaté', 'R. Barão da Pedra Negra, 517', NULL, 'Centro', '12020-220', NULL, 'avatar.jpg', 0, 1, '2014-09-11 18:51:18', '0000-00-00 00:00:00'),
(23, 'Rocha Lima', NULL, 'www.rochalima.com.br', 26, 'São Caetano do Sul', 'R. Espirito Santo, 66', NULL, 'Santo Antônio', '09530-700', NULL, 'avatar.jpg', 0, 1, '2014-09-11 18:59:30', '0000-00-00 00:00:00'),
(24, 'Tecnolab', NULL, 'www.tecnolab.com.br', 26, 'São Bernardo do Campo', 'Av Lucas Nogueira Garcez, 929', NULL, 'Jardim do Mar', '09750-670', NULL, 'avatar.jpg', 0, 1, '2014-09-11 19:04:22', '0000-00-00 00:00:00'),
(25, 'Lab. Analises Clínicas S. Lucas', NULL, NULL, 26, 'Taubate', 'Av. Nove de Julho, 365', NULL, 'Centro', NULL, NULL, 'avatar.jpg', 0, 1, '2014-09-11 19:14:55', '0000-00-00 00:00:00'),
(26, 'Lab. de Análises Clínicas Serbini', NULL, NULL, 26, 'Campinas', 'Av. Sen Antônio Lacerda Franco, 477', NULL, 'Vila Rica', '13060-858', NULL, 'avatar.jpg', 0, 1, '2014-12-11 00:05:32', '0000-00-00 00:00:00'),
(27, 'Hospital e Maternidade Santa Joana', NULL, 'www.hmsj.com.br', 26, 'São Paulo', 'R. do Paraíso, 432', NULL, 'Paraiso', '04103-000', NULL, 'avatar.jpg', 0, 1, '2014-09-11 19:27:29', '0000-00-00 00:00:00'),
(28, 'Digimagem - Medicina Diagnóstica', NULL, 'www.digimagem.com', 26, 'São Paulo', 'R. Joaquim Floriano, 233', NULL, 'Itaim Bibi', '04534-010', NULL, 'avatar.jpg', 0, 1, '2014-09-12 12:19:50', '0000-00-00 00:00:00'),
(29, 'Quaglia', 'atendimento@quaglia.com.br', 'www.quaglia.com.br', 26, 'São José dos Campos', 'R. Francisco Paes, 165 ', NULL, 'Centro', '12210-100', NULL, 'avatar.jpg', 0, 1, '2014-09-12 12:26:29', '0000-00-00 00:00:00'),
(30, 'ValeClin', NULL, 'www.valeclin.com.br', 26, 'São José dos Campos', 'Av. Dr. Ademar de Barros, 1188', NULL, 'Jardim São Dimas', '12245-011', NULL, 'avatar.jpg', 0, 1, '2014-09-12 16:11:31', '0000-00-00 00:00:00'),
(31, 'Unimed - SJC', NULL, 'www.unimedsjc.com.br', 26, 'São José dos Campos', 'Av. Tívoli, 400', NULL, 'Jardim São Dimas', NULL, NULL, 'avatar.jpg', 0, 1, '2014-09-12 12:38:38', '0000-00-00 00:00:00'),
(32, 'Cura - Imagem e Diagnóstico', 'agendamento@cura.com.br', 'www.cura.com.br', 26, 'São Paulo', 'Av. Brigadeiro Luis Antonio, 4417/4469', NULL, 'Jardim Paulista', '01401-002', NULL, 'avatar.jpg', 0, 1, '2014-09-12 12:46:19', '0000-00-00 00:00:00'),
(33, 'Real E Benemerita Ass Portuguesa Benefic', NULL, NULL, 26, 'São Paulo', 'R. Maestro Cardim, 769', 'Bloco-1, 1', 'Liberdade', '01323-001', NULL, 'avatar.jpg', 0, 1, '2014-09-12 12:51:46', '0000-00-00 00:00:00'),
(34, 'Nova Diagnóstico', NULL, 'www.novadiagnostico.com.br', 15, 'João Pessoa', 'Av. Epitácio Pessoa, n° 557', NULL, 'Bairro dos Estados', '58030-000', NULL, 'nova.jpg', 1, 1, '2014-12-11 03:21:05', '0000-00-00 00:00:00'),
(35, 'Mont'' Serrat', NULL, 'www.laboratoriomontserrat.com.br', 21, 'Porto Alegre', 'Av Mostardeiro,333', 'loja 112', 'Moinhos de Vento', '90430001', NULL, 'mont_serrat.jpg', 1, 1, '2014-12-11 02:25:50', '0000-00-00 00:00:00'),
(36, 'Lab Hormon', NULL, 'www.labhormon.com.br', 26, 'Santo André', 'Av. Dom Pedro II, 193', NULL, 'Bairro Jardim', '09080-110', NULL, '1417643906.jpg', 1, 1, '2014-12-11 15:19:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_detalhes`
--

CREATE TABLE IF NOT EXISTS `tb_detalhes` (
  `det_id` int(11) NOT NULL AUTO_INCREMENT,
  `det_cliid` int(11) DEFAULT NULL,
  `det_fiwi` int(11) DEFAULT NULL,
  `det_acessodefic` int(11) DEFAULT NULL,
  `det_estacionamento` int(11) DEFAULT NULL,
  `det_outrasunidades` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`det_id`),
  KEY `fk_id_cliente` (`det_cliid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `tb_detalhes`
--

INSERT INTO `tb_detalhes` (`det_id`, `det_cliid`, `det_fiwi`, `det_acessodefic`, `det_estacionamento`, `det_outrasunidades`) VALUES
(1, 1, 1, 1, 1, NULL),
(2, 2, 1, 1, 1, NULL),
(3, 3, 1, 1, 1, 'NULL'),
(4, 4, 1, 1, 1, NULL),
(5, 5, 1, 1, 1, NULL),
(6, 6, 1, 1, 1, NULL),
(7, 7, 1, 1, 1, NULL),
(8, 8, 1, 1, 1, NULL),
(9, 9, 1, 1, 1, NULL),
(11, 11, 1, 1, 1, NULL),
(12, 12, 1, 1, 1, NULL),
(13, 13, 1, 1, 1, NULL),
(14, 14, 1, 1, 1, NULL),
(15, 15, 1, 1, 1, NULL),
(16, 16, 1, 1, 1, 'http://www.richet.com.br/unidades/'),
(17, 17, 1, 1, 1, NULL),
(18, 18, 1, 1, 1, NULL),
(19, 19, 1, 1, 1, NULL),
(20, 20, 1, 1, 1, NULL),
(21, 21, 1, 1, 1, 'NULL'),
(22, 22, 1, 1, 1, NULL),
(23, 23, 1, 1, 1, NULL),
(24, 24, 1, 1, 1, NULL),
(25, 25, 1, 1, 1, NULL),
(26, 26, 1, 1, 1, NULL),
(27, 27, 1, 1, 1, NULL),
(28, 28, 1, 1, 1, 'http://www.digimagem.com/br/p/60/unidades---capa.aspx'),
(29, 29, 1, 1, 1, NULL),
(30, 30, 1, 1, 1, NULL),
(31, 31, 1, 1, 1, NULL),
(32, 32, 1, 1, 1, NULL),
(33, 33, 1, 1, 1, NULL),
(34, 34, 1, 1, 1, NULL),
(35, 35, 1, 1, 1, 'NULL'),
(36, 36, 1, 1, 1, 'http://www.labhormon.com.br/nossas-unidades');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estados`
--

CREATE TABLE IF NOT EXISTS `tb_estados` (
  `uf_id` int(11) NOT NULL AUTO_INCREMENT,
  `uf_nome` varchar(30) NOT NULL,
  `uf_sigla` varchar(2) NOT NULL,
  `uf_idpais` int(11) NOT NULL,
  PRIMARY KEY (`uf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `tb_estados`
--

INSERT INTO `tb_estados` (`uf_id`, `uf_nome`, `uf_sigla`, `uf_idpais`) VALUES
(1, 'Acre', 'AC', 1),
(2, 'Alagoas', 'AL', 1),
(3, 'Amapá', 'AP', 2),
(4, 'Amazonas', 'AM', 1),
(5, 'Bahia', 'BA', 1),
(6, 'Ceará', 'CE', 1),
(7, 'Distrito Federal', 'DF', 1),
(8, 'Espírito Santo', 'ES', 1),
(9, 'Goiás', 'GO', 1),
(10, 'Maranhão', 'MA', 1),
(11, 'Mato Grosso', 'MT', 1),
(12, 'Mato Grosso do Sul', 'MS', 1),
(13, 'Minas Gerais', 'MG', 1),
(14, 'Paraná', 'PR', 1),
(15, 'Paraíba', 'PB', 1),
(16, 'Pará', 'PA', 1),
(17, 'Pernambuco', 'PE', 1),
(18, 'Piauí', 'PI', 1),
(19, 'Rio de Janeiro', 'RJ', 1),
(20, 'Rio Grandes do Norte', 'RN', 1),
(21, 'Rio Grande do Sul', 'RS', 1),
(22, 'Rondonia', 'RO', 1),
(23, 'Roraima', 'RR', 1),
(24, 'Santa Catarina', 'SC', 1),
(25, 'Sergipe', 'SE', 1),
(26, 'São Paulo', 'SP', 1),
(27, 'Tocantis ', 'TO', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefones`
--

CREATE TABLE IF NOT EXISTS `tb_telefones` (
  `tel_id` int(11) NOT NULL AUTO_INCREMENT,
  `tel_cliid` int(11) DEFAULT NULL,
  `tel_fixo` varchar(14) DEFAULT NULL,
  `tel_celular` varchar(15) DEFAULT NULL,
  `tel_fax` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`tel_id`),
  KEY `fk_id_cliente` (`tel_cliid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `tb_telefones`
--

INSERT INTO `tb_telefones` (`tel_id`, `tel_cliid`, `tel_fixo`, `tel_celular`, `tel_fax`) VALUES
(1, 1, '(31) 3228-6200', NULL, NULL),
(2, 2, '(34) 3334-9400', NULL, NULL),
(3, 3, '(11) 59087000', NULL, NULL),
(4, 4, '(11) 3018-2030', NULL, NULL),
(5, 5, '(54) 3221.6542', NULL, NULL),
(6, 6, '(51) 3061-9999', NULL, NULL),
(7, 7, '(47) 3349 4022', NULL, NULL),
(8, 8, '(71) 3205-8730', NULL, NULL),
(9, 9, '(92) 2126-8000', NULL, NULL),
(11, 11, '(96) 32220035', NULL, NULL),
(12, 12, '(96) 32252824', NULL, NULL),
(13, 13, '(61) 3329-8000', NULL, NULL),
(14, 14, '(48) 3223-0070', NULL, NULL),
(15, 15, '(62) 3242-1931', NULL, NULL),
(16, 16, '(21) 3184-3000', NULL, NULL),
(17, 17, '(13) 2127-7000', NULL, NULL),
(18, 18, '(13) 3281-3000', NULL, NULL),
(19, 19, '(12) 2123-9200', NULL, NULL),
(20, 20, '(19) 3231-2166', NULL, NULL),
(21, 21, '(11) 4433-3233', NULL, NULL),
(22, 22, '(12) 3632-4177', NULL, NULL),
(23, 23, '(11) 4229-3544', NULL, NULL),
(24, 24, '(11) 2824-3200', NULL, NULL),
(25, 25, '(12) 3624-2919', NULL, NULL),
(26, 26, '(19) 3255-3393', NULL, NULL),
(27, 27, '(11) 508-06295', NULL, NULL),
(28, 28, '(11) 2799-9311', NULL, NULL),
(29, 29, '(12) 2138-9500', NULL, NULL),
(30, 30, '(12) 3519-3384', NULL, NULL),
(31, 31, '(12) 3878-1414', NULL, NULL),
(32, 32, '(11) 3056-4707', NULL, NULL),
(33, 33, '(11) 3505-1148', NULL, NULL),
(34, 34, '(83) 2107-2600', NULL, NULL),
(35, 35, '(51) 3222-3000', NULL, NULL),
(36, 36, '(11) 4433-3233', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(100) NOT NULL,
  `usu_email` varchar(100) NOT NULL,
  `usu_senha` varchar(255) NOT NULL,
  `usu_status` int(11) NOT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`usu_id`, `usu_nome`, `usu_email`, `usu_senha`, `usu_status`) VALUES
(1, 'Moisés Escurra', 'moises.escurra@labconous.com', 'nous', 1),
(2, 'Caio Mendonça', 'caio.mendonca@labconous.com', 'nous', 1),
(3, 'Marcel Machado', 'marcel.machado@labconous.com', 'nous', 1),
(4, 'Gabriela Becker', 'gabriela.becker@labconous.com', 'nous', 1),
(5, 'Maria Arismendi', 'maria.arismendi@labconous.com', 'nous', 1),
(6, 'Suporte Brasil', 'suporte.brasil@labconous.com', 'nous', 1),
(7, 'Atendimento Brasil', 'atendimento.brasil@labconous.com', 'nous', 1),
(8, 'Elisabeth Turbinai', 'elisabeth.turbiani@labconous.com', 'nous', 1),
(9, 'Hector Cormano', 'hector.cormano@labconous.com', 'nous', 1),
(10, 'Usuário Visitante', 'visitante@labconous.com', 'nous', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
