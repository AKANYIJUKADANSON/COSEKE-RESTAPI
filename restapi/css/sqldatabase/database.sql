--
-- CREATING TABLE
--

CREATE TABLE IF NOT EXISTS `storeuserdata_tbl`(
    `id` int(50) NOT NULL,
    `firstname` varchar(50) NOT NULL,
    `lastname` varchar(50) NOT NULL,
    `age` int(50) NOT NULL,
    PRIMARY KEY (`id`)
);