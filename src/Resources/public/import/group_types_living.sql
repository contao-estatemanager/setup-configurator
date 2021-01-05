INSERT INTO `tl_real_estate_group` (`id`, `tstamp`, `title`, `similarGroup`, `referencePage`, `vermarktungsart`, `published`) VALUES(1, 1563301815, 'Wohnen - Kaufen', 2, 0, 'kauf_erbpacht', '1');
INSERT INTO `tl_real_estate_group` (`id`, `tstamp`, `title`, `similarGroup`, `referencePage`, `vermarktungsart`, `published`) VALUES(2, 1563301824, 'Wohnen - Mieten', 1, 0, 'miete_leasing', '1');

INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(1, 1, 320, 1583341162, 'Wohnung', 'Eigentumswohnungen', 4, 0, 0, 'wohnen', 'kauf_erbpacht', 'wohnung', '', NULL, 'kaufpreis', 'wohnflaeche', 'a:3:{i:0;s:5:\"price\";i:1;s:4:\"room\";i:2;s:4:\"area\";}', 0x613a333a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b6175667072656973223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a323b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d7d, 0x613a343a7b693a303b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a323b613a313a7b733a353a226669656c64223b733a31363a22616e7a61686c426164657a696d6d6572223b7d693a333b613a313a7b733a353a226669656c64223b733a373a226261756a616872223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '1', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(2, 1, 352, 1583341140, 'Haus', 'Häuser zum Kauf', 5, 0, 0, 'wohnen', 'kauf_erbpacht', 'haus', '', NULL, 'kaufpreis', 'wohnflaeche', 'a:3:{i:0;s:5:\"price\";i:1;s:4:\"room\";i:2;s:4:\"area\";}', 0x613a343a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b6175667072656973223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a323b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a333b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d7d, 0x613a353a7b693a303b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d693a323b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a333b613a313a7b733a353a226669656c64223b733a31363a22616e7a61686c426164657a696d6d6572223b7d693a343b613a313a7b733a353a226669656c64223b733a373a226261756a616872223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(3, 1, 384, 1583341176, 'Grundstück', 'Grundstücke zum Kauf', 6, 0, 0, 'wohnen', 'kauf_erbpacht', 'grundstueck', '', NULL, 'kaufpreis', 'grundstuecksflaeche', 'a:2:{i:0;s:5:\"price\";i:1;s:4:\"area\";}', 0x613a323a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b6175667072656973223b7d693a313b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(4, 2, 128, 1583341221, 'Wohnung', 'Mietwohnungen', 1, 0, 0, 'wohnen', 'miete_leasing', 'wohnung', '', NULL, 'kaltmiete', 'wohnflaeche', 'a:3:{i:0;s:5:\"price\";i:1;s:4:\"room\";i:2;s:4:\"area\";}', 0x613a333a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b616c746d69657465223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a323b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d7d, 0x613a343a7b693a303b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a323b613a313a7b733a353a226669656c64223b733a31363a22616e7a61686c426164657a696d6d6572223b7d693a333b613a313a7b733a353a226669656c64223b733a373a226261756a616872223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(5, 2, 256, 1583341233, 'Haus', 'Häuser zur Miete', 2, 0, 0, 'wohnen', 'miete_leasing', 'haus', '', NULL, 'kaltmiete', 'wohnflaeche', 'a:3:{i:0;s:5:\"price\";i:1;s:4:\"room\";i:2;s:4:\"area\";}', 0x613a343a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b616c746d69657465223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a323b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a333b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d7d, 0x613a353a7b693a303b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d693a323b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a333b613a313a7b733a353a226669656c64223b733a31363a22616e7a61686c426164657a696d6d6572223b7d693a343b613a313a7b733a353a226669656c64223b733a373a226261756a616872223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(6, 2, 384, 1598257474, 'Grundstück', 'Grundstücke zur Miete', 3, 0, 0, 'wohnen', 'miete_leasing', 'grundstueck', '', NULL, 'kaltmiete', 'grundstuecksflaeche', 'a:3:{i:0;s:5:\"price\";i:1;s:4:\"area\";i:2;s:3:\"per\";}', 0x613a323a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b616c746d69657465223b7d693a313b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(8, 1, 640, 1598257469, 'Garage / Stellplatz', 'Garagen & Stellplätze zum Kauf', 10, 0, 0, 'wohnen', 'kauf_erbpacht', 'parken', '', NULL, 'kaufpreis', 'gesamtflaeche', 'a:2:{i:0;s:5:\"price\";i:1;s:4:\"area\";}', 0x613a323a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b6175667072656973223b7d693a313b613a313a7b733a353a226669656c64223b733a31333a22676573616d74666c6165636865223b7d7d, 0x613a323a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b6175667072656973223b7d693a313b613a313a7b733a353a226669656c64223b733a31333a22676573616d74666c6165636865223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(9, 2, 512, 1598257473, 'Wohnen auf Zeit', 'Wohnen auf Zeit', 0, 0, 0, 'waz', 'miete_leasing', '', '', NULL, 'pauschalmiete', 'wohnflaeche', 'a:3:{i:0;s:5:\"price\";i:1;s:4:\"area\";i:2;s:6:\"period\";}', 0x613a333a7b693a303b613a313a7b733a353a226669656c64223b733a31333a22706175736368616c6d69657465223b7d693a313b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a323b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d7d, 0x613a333a7b693a303b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22616e7a61686c5a696d6d6572223b7d693a323b613a313a7b733a353a226669656c64223b733a373a226162646174756d223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(10, 2, 640, 1598257473, 'Garage / Stellplatz', 'Garagen & Stellplätze zur Miete', 8, 0, 0, 'wohnen', 'miete_leasing', 'sonstige', '', NULL, 'kaltmiete', 'gesamtflaeche', 'a:2:{i:0;s:5:\"price\";i:1;s:4:\"area\";}', 0x613a323a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b616c746d69657465223b7d693a313b613a313a7b733a353a226669656c64223b733a31333a22676573616d74666c6165636865223b7d7d, 0x613a323a7b693a303b613a313a7b733a353a226669656c64223b733a31333a22676573616d74666c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31323a22766572667565676261724162223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(23, 1, 768, 1587106228, 'Sonstige', 'Sonstige zum Kauf', 0, 0, 0, 'wohnen', 'kauf_erbpacht', 'sonstige', '', NULL, 'kaufpreis', 'wohnflaeche', 'a:2:{i:0;s:5:\"price\";i:1;s:4:\"area\";}', 0x613a333a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b6175667072656973223b7d693a313b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a323b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d7d, 0x613a333a7b693a303b613a313a7b733a353a226669656c64223b733a31313a22776f686e666c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d693a323b613a313a7b733a353a226669656c64223b733a373a226261756a616872223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');
INSERT INTO `tl_real_estate_type` (`id`, `pid`, `sorting`, `tstamp`, `title`, `longTitle`, `similarType`, `referencePage`, `jumpTo`, `nutzungsart`, `vermarktungsart`, `objektart`, `excludeTypes`, `excludedTypes`, `price`, `area`, `toggleFilter`, `sortingOptions`, `mainDetails`, `mainAttributes`, `orderFields`, `orderedFields`, `defaultType`, `published`, `language`) VALUES(24, 1, 576, 1583341185, 'Anlageobjekt', 'Anlageobjekt', 0, 0, 0, '', 'kauf_erbpacht', 'zinshaus_renditeobjekt', '', NULL, 'kaufpreis', 'vermietbareFlaeche', 'a:2:{i:0;s:5:\"price\";i:1;s:4:\"area\";}', 0x613a323a7b693a303b613a313a7b733a353a226669656c64223b733a393a226b6175667072656973223b7d693a313b613a313a7b733a353a226669656c64223b733a31383a227665726d69657462617265466c6165636865223b7d7d, 0x613a333a7b693a303b613a313a7b733a353a226669656c64223b733a31383a227665726d69657462617265466c6165636865223b7d693a313b613a313a7b733a353a226669656c64223b733a31393a226772756e6473747565636b73666c6165636865223b7d693a323b613a313a7b733a353a226669656c64223b733a373a226261756a616872223b7d7d, 0x613a313a7b693a303b613a313a7b733a353a226669656c64223b733a303a22223b7d7d, '', NULL, '', '1', '');