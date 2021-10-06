-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/10/2021 às 01:46
-- Versão do servidor: 10.4.19-MariaDB
-- Versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ra200471705`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `Id` int(100) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `course` varchar(64) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`Id`, `name`, `email`, `password`, `phone`, `course`, `status`) VALUES
(38, 'Dwight Souza', 'dwightsouza@gmail.com', '123', '(47) 99605-3086', 'SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET', 0),
(39, 'Bill Gates', 'gates@bill.com', '123', '83748278471', 'Microsof', 0),
(40, 'Rafale A. Florindo', 'rafael@florindo.com', '123', '4828372759', 'Back - end', 0),
(43, 'Mark Zuckerberg', 'contact@zuckerberg.com', '123', '2312564231', 'Programador', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `Id` int(100) NOT NULL,
  `nameCurso` varchar(80) NOT NULL,
  `description` varchar(700) NOT NULL,
  `dataStart` varchar(64) NOT NULL,
  `dataFinish` varchar(15) NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`Id`, `nameCurso`, `description`, `dataStart`, `dataFinish`, `status`) VALUES
(2, 'Análise e Desenvolvimento de Sistemas', 'Se tecnologia e inovação sempre te chamaram a atenção, o curso de Análise e Desenvolvimento de Sistemas EAD é a graduação ideal para iniciar a sua carreira. \r\n\r\nNeste curso você aprende a desenvolver sistemas computacionais de informação, softwares, redes e banco de dados, aprendendo também sobre hardwares, programação, conhecimentos no campo da informática e várias outras soluções tecnológicas para contribuir com o desenvolvimento de organizações.\r\n\r\nO objetivo deste curso tecnólogo é formar profissionais capazes de desenvolver sistemas e softwares, bem como administrar redes e bancos de dados, dando suporte a usuários e sendo capaz de atuar em diferentes campos da tecnologia da informação.', '29/09/2021', '16/06/2023', ''),
(12, 'Banco de Dados', 'Aprenda os fundamentos do SQL, a linguagem de consulta a Bancos de Dados mais tradicional e se torne capaz de escrever Querys que implementam CRUD (operações fundamentais de um sistema de Bancos de Dados) e também como responder perguntas do seu negócio através de consultas. Modelagem de banco de dados Aprenda as boas práticas de modelagem de um Banco de Dados, estruture bancos robustos de forma competente e eficiente, maximizando a performance. Visualização de Dados para Análise de Negócio Aprenda a integrar o Power BI ao seu Banco de Dados e a utilizar essa ferramenta de visualização para gerar dashboards que propiciem a sua equipe interação com o banco construído de forma intuitiva e maxi', '01/12/2021', '01/03/2022', ''),
(13, 'Front-end', 'É primordial que um desenvolvedor front-end tenha domínio em HTML, CSS e JavaScript,  pois eles são a base do desenvolvimento web. O HTML é o responsável por estruturar a página, o CSS por estilizar esta estrutura e o JavaScript por fazer com que a interface seja dinâmica. Existem muitos frameworks e bibliotecas que auxiliam no desenvolvimento, porém não é desejável que o desenvolvedor front-end foque seus estudos somente neles, pois eles surgem e ficam defasados com certa velocidade. Caso o desenvolvedor tenha habilidade com os conceitos base do desenvolvimento web, ele conseguirá rapidamente se adaptar a novas ferramentas e até customizá-las quando necessário.', '11/10/2021', '01/09/2023', ''),
(16, 'Superior de Tecnologia em Sistemas para Internet', 'O Curso Superior de Tecnologia em Sistemas para Internet forma profissionais que ocupam-se do desenvolvimento de programas, de interfaces e aplicativos, do comércio e do marketing eletrônicos, além de páginas e portais para internet e intranet. Este profissional gerencia projetos de sistemas, inclusive com acesso a banco de dados, desenvolvendo projetos de aplicações para a rede mundial de computadores e integra mídias nas páginas da internet. Este profissional atua com tecnologias emergentes como: computação móvel, redes sem fio e sistemas distribuídos. Cuidar da implantação, atualização, manutenção e segurança dos sistemas para internet também são suas atribuições.', '01/02/2020', '01/09/2023', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
