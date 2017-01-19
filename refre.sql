-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 06:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refre`
--

-- --------------------------------------------------------

--
-- Table structure for table `gp_banner`
--

CREATE TABLE `gp_banner` (
  `id` int(11) NOT NULL,
  `banner_name` text NOT NULL,
  `bannerimages` text NOT NULL,
  `banner_url` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_banner`
--

INSERT INTO `gp_banner` (`id`, `banner_name`, `bannerimages`, `banner_url`, `status`) VALUES
(1, 'as', 'bio-sheild.png', 'test', 1),
(2, 'as', 'bioshampoo-500.png', 'as', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gp_category`
--

CREATE TABLE `gp_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(2000) NOT NULL,
  `category_seo_name` varchar(2000) NOT NULL,
  `category_meta_title` varchar(1000) NOT NULL,
  `category_descrption` text NOT NULL,
  `category_meta_description` text NOT NULL,
  `category_meta_keyword` text NOT NULL,
  `category_status` int(11) NOT NULL,
  `cat_sort` varchar(10) NOT NULL DEFAULT '0',
  `cat_sub_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='gp_product_category';

--
-- Dumping data for table `gp_category`
--

INSERT INTO `gp_category` (`category_id`, `category_name`, `category_seo_name`, `category_meta_title`, `category_descrption`, `category_meta_description`, `category_meta_keyword`, `category_status`, `cat_sort`, `cat_sub_id`) VALUES
(2, 'Body Care', 'body-care', 'test', 'Body Care', 'Body Care', 'Body Care', 1, '', NULL),
(3, 'Foot Care', 'foot-care', '', 'Foot Care', 'Foot Care', 'Foot Care', 1, '', NULL),
(4, 'Skin Care ', 'skin-care', '', 'Skin care', 'Skin Care', 'Skin care', 1, '', NULL),
(5, 'Hair Care', 'hair-care', '', 'Hair Care', 'Hair Care', 'Hair Care', 1, '', NULL),
(6, 'Facial  pack ', 'facial-pack', '', 'Facial  pack ', 'Facial  pack ', 'Facial  pack ', 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gp_contact`
--

CREATE TABLE `gp_contact` (
  `phone` varchar(20) NOT NULL,
  `phone2` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_contact`
--

INSERT INTO `gp_contact` (`phone`, `phone2`, `email`, `address`) VALUES
('9971936817', '9971936817', 'info@ihavedicbeauty.com', 'IHA VEDIC ESSENTIALS PVT. LTD.<br/>\r\n981, 1st Floor, Modern Industrial Estate, Phase : A,<br/>\r\nBahadurgarh : 124 507, Haryana, India');

-- --------------------------------------------------------

--
-- Table structure for table `gp_enquiry`
--

CREATE TABLE `gp_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_enquiry`
--

INSERT INTO `gp_enquiry` (`id`, `name`, `email`, `phone`, `message`, `product_name`, `product_id`) VALUES
(1, 'Ashsih', 'ashishemail01@gmail.com', '9999999999', 'test', 'Aloe Moist', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gp_products`
--

CREATE TABLE `gp_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(2000) NOT NULL,
  `product_image` text NOT NULL,
  `product_description` text NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_price_unit` varchar(100) NOT NULL,
  `product_status` int(11) NOT NULL,
  `feature_status` int(11) NOT NULL,
  `sort` varchar(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `sub_product` text NOT NULL,
  `product_seo_url` text NOT NULL,
  `product_meta_desc` text NOT NULL,
  `product_meta_keyword` text NOT NULL,
  `product_title` text NOT NULL,
  `case_size` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_products`
--

INSERT INTO `gp_products` (`product_id`, `product_name`, `product_image`, `product_description`, `product_price`, `product_price_unit`, `product_status`, `feature_status`, `sort`, `cat_id`, `sub_cat_id`, `sub_product`, `product_seo_url`, `product_meta_desc`, `product_meta_keyword`, `product_title`, `case_size`) VALUES
(22, 'Acne Check  Bathing Bar', 'suryalamimap.PNG', '<p class="pro-desc-123">\r\nIHA -Acne Check is Fortified with strong & effective herbal actives like Neem, Basil, Thyme, Camphor & Indian Beech, Iha Vedic Essentials ACNE CHECK Facial Bar helps controlling infections associated with formation of acne & pimples. Itâ€™s active ingredients regulates excessive oil production from the oil glands of the skin. Resulting in  cleaner, fresher & oil free skin for long hours and less chances of occurrence of acne & pimple on skin.\r\n</p> \r\n<h4> <strong>Active Ingredients:</strong></h4> \r\n<p class="pro-desc-123">\r\n\r\n Each gram contains natural extracts of Neem (Azadirachta Indica Leaf)150 mg, Basil (Ocimum Sanctum Leaf) 100 mg, Thyme (Thymus Vulgaris Fruit) 100 mg, Camphor (Cinnamomum Camphora) 20 mg & Indian Beech (Pongamia Pinnata Seed Oil) 30 mg.\r\n</p>\r\n<h4> <strong>Other Ingredients :</strong></h4>\r\n\r\n<p class="pro-desc-123">\r\n \r\nSodium Cocoate Sodium Stearate,\r\nSodium Laureth Sulphate, Purified Water,\r\nPropylene Glycol, Sucrose, \r\nGlycerine, Fragrance,\r\nSodium Benzoate,\r\nPotassium Sorbate,\r\nSodium Gluconate,\r\nSodium Chloride and C.I. 61570 & 19140.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Directions</strong></h4>  : Apply ACNE CHECK Facial Bar on wet face & gently massage for few minutes to work up lather. Rinse off with fresh water & pat dry. Use twice a day for best results.</p>', 110.00, 'g', 1, 0, '0', 2, 0, '', 'acne-check-natural-bathing-bar', 'Acne Check Natural Bathing Bar', 'Acne Check Natural Bathing Bar', 'Acne Check Natural Bathing Bar', '96'),
(23, 'Aloe Moist', 'good-morning-blessings3.jpg', '<p class="pro-desc-123">\r\nEnriched with natural skin moisturizers & conditioners like Aloe Vera, Lotus, Indian Beech, Gingelly  and Neem, Iha Vedic Essentials Aloe Moist is a naturally derived body wash that offers extra - gentle skin care. It gently cleanses the skin without irritating or producing any sign of dryness, leaving behind a soft, supple, smooth & well moisturized skin.\r\n</p>\r\n\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n <p class="pro-desc-123">\r\n Each gram contains natural extracts of Aloe Leaf (Aloe Vera) 150 mg, Lotus Flower (Nelumbo Nucifera Flower & Root) 150 mg, Indian Beech (Pongamia Pinnata Seed Oil) 20 mg, Neem (Azadirachta Indica Seed Oil ) 20 mg & Gingelly (Sesamum Indicum Seed Oil) 20 mg.\r\n</p>\r\n<h4> <strong>Other Ingredients :</strong></h4>\r\n <p class="pro-desc-123">\r\n Sodium Cocoate Sodium Stearate, Sodium Laureth Sulphate, Purified Water, Propylene Glycol, Sucrose, Glycerine, Fragrance, Sodium Benzoate, Potassium Sorbate, Sodium Gluconate, Sodium Chloride, C.I. 16255, 15985 & 42090.\r\n</p>\r\n<h4> <strong>Directions:</strong></h4>\r\n <p class="pro-desc-123">\r\n Apply ALOE MOIST Bathing Bar on wet body & gently massage for few minutes to work up lather. Rinse off with fresh water & pat dry. Use daily for best results.</p>', 100.00, 'g', 1, 0, '0', 2, 0, '', 'aloe-moist', 'Aloe Moist', 'Aloe Moist', 'Aloe Moist', '96'),
(24, 'Cool N Soothe', 'cool-n-soothe.png', '\r\n<p class="pro-desc-123">\r\nIha Vedic Essentials COOL â€˜Nâ€™ SOOTHE Natural Bathing Bar keeps you cool, fresh and revitalized through out the day. Itâ€™s herbal actives fight  body odor, soothe  & heal sweat rashes and prickly heat, leaving a cooler,  fresher and un-irritated skin 24 X 7.\r\n </p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n Each gram contains natural extracts of Neem (Azadhiracta Indica Leaf  Distillate) 30 mg, Spearmint  (Mentha Spicata Leaf) 20 mg, Rose Water  (Rosa Centifolia Distillate) 20 mg, Aloe Vera (Aloe Barbadensis Leaf Ext.)20 mg, Cucumber (Cucumis sativus Fruit Juice) 10 mg, Indian Vetiver (Vetiveria Zizanodes Roots) 10 mg, Licorice(Glycyrrhiza Glabra Root) 5 mg and Indian Beech  (Pongamia Pinnata Seed) 5 mg.\r\n </p>\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Sodium Cocoate Sodium Stearate, Sodium Laureth Sulphate, Purified Water, Propylene Glycol, Sucrose, Glycerine, Fragrance, Sodium Benzoate, Potassium Sorbate, Sodium Gluconate,  Sodium Chloride and  C.I.61570.\r\n \r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n  <h4> <strong>Directions :</strong></h4>\r\n Apply COOL â€˜Nâ€™ Soothe Natural Bathing  Bar on wet body & gently massage for few minutes to work up lather. Rinse off with fresh water & pat dry. Use daily for best results.\r\n</p>', 100.00, 'g', 1, 0, '0', 2, 0, '', 'cool-n-soothe', 'Cool N Soothe', 'Cool N Soothe', 'Cool N Soothe', '96'),
(25, 'Dermasoft Bathing Bar', 'dema-soft.png', '<p class="pro-desc-123">\r\nA very mild soap specially formulated for very fragile & sensitive skin types. Rich in extra gentle skin care herbs like Rose, Sandal, Sun flower and Aloe Vera. Dermasoft Bathing Bar<br/>\r\n- maintains the skin pH & dermal water balance of your skin,<br/>\r\n- makes skin hydrated and well-lubricated,<br/>\r\n- keeps skin soft, smooth, well-toned, refreshed and<br/>\r\n- the soothing & relaxing aroma of rose and sandal alleviates your body &  mind,<br/>\r\nthus offering a tender care to your sensitive skin with no dryness & sensitivity.<br/>\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4> Each gram contains natural extracts of Rose (Rosa Centifolia Floral Water) 100mg, Aloe Vera ( Aloe Vera Leaf Extract) 50mg, Sunflower Oil\r\n(Helianthus Annuus Seed Oil) 30 mg, Gingelly Oil ( Sesamum Indicum Seed Oil) 30 mg and Sandalwood (Santalum Album Wood Extract) 5mg.\r\n</p>\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4> Sodium Cocoate Sodium Stearate, Sodium Laureth Sulphate, Purified Water, Propylene Glycol, Sucrose, Glycerine, Fragrance, Sodium Benzoate, Potassium Sorbate, Sodium Gluconate, Sodium Chloride, Bees Wax, Fragrance & C.I. 45430.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>Directions :</strong></h4> Make your body wet. Apply Dermasoft Bathing Bar on your body and massage to work up lather. Wait for few minutes then rinse of with water.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\n In case of irritation or side effect on use, stop using immediately & rinse thoroughly with fresh water. Seek medical advise, if required.\r\n</p>\r\n', 125.00, 'g', 1, 0, '0', 2, 0, '', 'dermasoft-bathing-bar', 'Dermasoft Bathing Bar', 'Dermasoft Bathing Bar', 'Dermasoft Bathing Bar', '96'),
(26, 'Honey Bathing Bar', 'honey-bathing-bar.png', '<p class="pro-desc-123">\r\nSpecially designed for dry, sensitive and easily irritated skin types, Iha Honey Bathing Bar is a rich moisturising bathing bar that gently cleanse the skin without disturbing the dermal natural moisture balance.\r\nInfused with moisturising beauty butters, milk and oils, Iha Honey moisturising bathing bar while bathing coats your skin in a luxuriant film of silky emollients leaving behind a soft, smooth and well - lubricated skin.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n\r\nEach  gram contains  Honey (Mel Pura) 50mg, Neem Oil (Azadirachta Indica Seed Oil) 50mg, Indian Beech Oil ( Pongamia Pinnata Seed Oil) 50mg, Aloe Vera Juice (Aloe Vera Leaf Exudate) 50 mg, Mango Butter ( Mangifera Indica Seed Oil) 20 mg, Kokum Butter ( Garcinia Indica Seed Oil), Cow s Milk Powder 20mg, Orange Oil ( Citrus Medica var. Reticulata Fruit Peel Oil) 2.5mg and Vegetal Glycerine30mg.\r\n</p>\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nSodium Cocoate Sodium Stearate, Sodium Laureth Sulphate, Purified Water, Propylene Glycol, Sucrose, Glycerine, Fragrance, Sodium Benzoate, Potassium Sorbate, Sodium Gluconate, Sodium Chloride Bees Wax, Fragrance , C.I. 19140, C.I. 15985 and C.I. 14720.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>Directions :</strong></h4>\r\n Make your body wet. Apply Honey Bathing Bar on your body and massage to work up lather. Wait for few minutes then rinse of with water\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\n In case of irritation or side effect on use, stop using immediately & rinse thoroughly with fresh water. Seek medical advise, if required.\r\n</p>\r\n', 125.00, 'g', 1, 0, '0', 2, 0, '', 'honey-bathing-bar', 'Honey Bathing Bar', 'Honey Bathing Bar', 'Honey Bathing Bar', '96'),
(27, 'Lavender Bathing Bar', 'lavender.png', '<p class="pro-desc-123">\r\n\r\nLavender Bathing Bar  is fortified with strong herbal purifying actives  like Lavender, Thyme, Rosemary and Grape Seed, Iha - LAVENDER Bathing Bar is a natural purifying Bathing  Bar that cleanse the skin of dirt, grime, toxins, disease causing germs and other skin affections. It fights body odour, controls prickly heat condition and skin rashes. Stimulating aroma of lavender alleviates your mind and body and infuses a long lasting freshness.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n\r\nEach gram contains natural extracts of  Candelabra Bush\r\n( Cassia Alata Leaf Extract) 50 mg, Grape Seed (Vitis Vinifera Seed Extract) 30 mg, Rosemary (Rosmarinus Officinalis Leaf Oil) 30 mg  and  Marigold ( Tegetes Patula Flower Extract) 20 mg, Lavender Oil ( Lavandula Angustifolia Inflorescence Oil) 20 mg & Thyme ( Thymus Vulgaris Fruit Oil) 10 mg\r\n</p>\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nSodium Cocoate Sodium Stearate, Sodium Laureth Sulphate, Purified Water, Propylene Glycol, Sucrose, Glycerine, Fragrance, Sodium Benzoate, Potassium Sorbate, Sodium Gluconate, Sodium Chloride and C.I. 61570 & 19140. Bees Wax,  Fragrance, C.I. 19140, C.I. 15985 and C.I. 14720.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>Directions :</strong></h4>\r\nMake your body wet. Apply Lavender Bathing Bar on your body and massage to work up lather. Wait for few minutes then rinse of with water\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nIn case of irritation or side effect on use, stop using immediately & rinse thoroughly with fresh water. Seek medical advise, if required\r\n</p>\r\n', 125.00, 'g', 1, 0, '0', 2, 0, '', 'lavender-bathing-bar', 'Lavender Bathing Bar', 'Lavender Bathing Bar', 'Lavender Bathing Bar', '96'),
(28, 'Honey Dew Body Wash', 'honey-dew.png', '<p class="pro-desc-123">\r\n\r\nIha  HONEY DEW  is a gentle  yet  potent detoxifying Body Wash. Enriched with strong detoxifying & deodorant  ayurvedic  actives like  Neem, Licorice,  Basil , Screw- pine & Honey that not only cleanse & conditions the body but also detoxify the skin of germs, toxins & body odour. The sweet aroma of Screw-pine & Basil calms your body & mind and alleviates your body from fatigue & tiredness. Thus making you feel fresh & lively throughout the day.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n\r\n Each ml. contains natural extracts of Neem (Azadirachta Indica Leaf) 30mg,  Aloe (Aloe Vera Leaf) 30mg, Honey (Mel Pura) 20mg, Tulasi (Ocimum Sanctum Leaf) 20 mg,  Beauty Berry (Callicarpa Macrophylla Flower) 10mg, Bush Turmeric (Coscinum Fenestratum Root) 10mg, Licorice (Glycyrrhiza Glabra Root)10mg, Angelica (Angelica Archangelica Root) 10mg, Indian Beech (Pongamia Pinnata Root)5 mg & Screwpine (Pandanus Tectorius) 2.5 mg .\r\n</p>\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Sodium Cocyl Glycinate, Cocobetaine, Vegetal Glycerine, Xanthan Gum, Sodium Benzoate & Fragrance.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>Directions :</strong></h4>\r\nMake your Body wet. Apply Body Wash and massage to work up lather. Wait for few seconds and rinse off with water.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician.\r\n</p>', 125.00, 'ml', 1, 0, '0', 2, 0, '', 'honey-dew-body-wash', 'Honey Dew Body Wash', 'Honey Dew Body Wash', 'Honey Dew Body Wash', '100'),
(29, 'Body Radiance ( Body Massage Oil)', 'body-radiance.png', '<p class="pro-desc-123">\r\n\r\nBODY RADIANCE OIL is perfectly blended to invigorate and revitalize the skin on cellular level. The ayurvedic actives contained in Body Radiance Oil provide the skin with vital nutrients   much needed for a healthy, radiant and younger looking skin. This body oil is ideal for dry skin, tiered and tensed muscles as it quickly penetrates the skin and helps to relieve fatigued & stressed muscles. Though useful in general body aches & pains, try Body Radiance Oil for head & scalp massage too, to relieve tension, head ache and sleeplessness.\r\n \r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n\r\n Each ml. Gingelly (Sesamum Indicum Seed Oil) contains natural extracts of Indian Olibanum (Boswellia Serrata Exudate) 20mg, Indian Bedellium (Commiphora Wightii Exudate) 20mg., Arrow Leaf Sida (Sida Rhombifolia Root) 20mg, Five leaved Chaste Tree (Vitex Negundo Leaf) 20mg,  Linseed (Linum Usitatissimum Seed Oil) 20mg, Sweet Flag (Acorus Calamus Rhizome) 10mg, Asparagus (Asparagus Racemosus Root) 5mg, Woolly Morning Glory(Arygeria Speciosa Root) 5mg, Ginger (Zingiber Officinale Rhizome) 5mg, Lemon Bacopa (Bacopa Monierie W/Plant) 5mg, Speed Wheel (Convolvulus Pluricaulis W/Plant) 5mg  & Fragrance\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Indications:</strong></h4>\r\n General Body Aches & Pains, Sleeplessness & Dry skin conditions\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>Directions :</strong></h4>\r\n Apply Body Radiance Oil on your body/ Head and massage gently till the oil get absorbed into your skin OR use as per advice of the physician.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discont\r\n</p>\r\n', 125.00, 'ml', 1, 0, '0', 2, 0, '', 'body-radiance-body-massage-oil', 'Body Radiance Body Massage Oil', 'Body Radiance Body Massage Oil', 'Body Radiance Body Massage Oil', '100'),
(30, 'Boro Heal Natural', 'boroheal-natural.png', '<p class="pro-desc-123">\r\nIHA Vedic Essentials BORO HEAL natural Foot Care Bar is specially formulated to provide tender care to your feet. It is an extra mild foot cleanser along with Luffa Fibres. It gently exfoliates the dead  hard skin, dirt grime, toxins & infections from your feet & foot heels making them soft, supple & smooth. Itâ€™s natural antiseptics & healing agents like Gotukola, Turmeric & Cedar wood help removing infection & healing cracks resulting in softer, smoother & healthier feet in quick time.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach gram contains natural extracts of Luffa (Luffa Acutangula Fruit & Fibres) 150 mg, Neem (Azadirachta Indica Leaf ) 50 mg, Turmeric (Curcuma Longa Rhizome Distillate) 25 mg, Aloe Vera ((Aloe Vera Leaf Ext) 10 mg Borax 10 mg, Indian Basil (Ocimum Sanctum Leaf)10 mg, Indian Gotukola (Centella Asiatica W/P ) 5 mg and Cedarwood (Cedrus Deodara Wood Oil) 0.25 mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nSodium Cocoate Sodium Stearate, Sodium Laureth Sulphate, Purified Water, Propylene Glycol, Sucrose, Glycerine, Sodium Chloride, Sodium Benzoate, Potassium Sorbate, Sodium Gluconate, C.I.61570 and C.I.19140.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>Directions :</strong></h4>\r\nWet your feet with fresh or luke warm water. Apply BORO HEAL natural and gently rub to produce lather. Now gently rub your foot heels and sides with center of the bar to exfoliate dead cells, dirt, grimes & infections from your feet. Use daily to quickly heal & make your feet soft\r\n</p>', 100.00, 'g', 1, 0, '0', 3, 0, '', 'boro-heal-natural', 'Boro Heal Natural', 'Boro Heal Natural', 'Boro Heal Natural', '96'),
(31, 'Acne Wash Face Wash', 'acne-face-wash.png', '<p class="pro-desc-123">\r\nInfused with very potent & strong antibiotic & anti inflammatory herbal actives like turmeric, mango ginger, neem, fenugreek, lemon grass & aloe vera, Iha - Acne Wash Natural face wash offers a completely ayurvedic  and very effective treatment for acne & oily skin. Acne Wash is a holistic treatment for oily & acne prone skin as it acts on all the main causes of oily & acne prone skin like oil secretion, keratinocytes proliferation, inflammation & bacterial growth associated with acne problem. When used regularly it cleanses the skin of oily - secretion , makes the skin dry, clean & fresh for long hours. Its antiseptic herbal actives fight growth of bacteria on skin and healing herbal actives help in quick healing of inflammations, diminishing of acne & pimple marks and promote the growth of healthy, smooth & acne free facial skin.\r\n</p>\r\n<p class="pro-desc-123">\r\nIHA Vedic Acne Face wash is the best ayurvedic facewash for acne and oily skin. Iha Vedic Beauty has a range of good face wash for men and women.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach ml. contains natural extracts of Aloe Vera (Aloe Vera Leaf Extract) 15 mg, Turmeric (Curcuma Longa Rhizome) 10 mg, Mango Ginger (Curcuma Amada Rhizome) 10 mg, Neem (Azadirachta Indica Leaf ) 5 mg, Lemon Grass (Cymbopogon Citratus Leaf) 5 mg, Wild/Bush Turmeric (Coscinum Fenestratum Rhizome) 2.5 mg and   Fenugreek (Trigonella Foenum Graecum Seed) 2.5 mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Sodium Cocyl Glycinate, Coco Amido Propyl Betaine, Glycerine, Decyl Glucoside, Gluceryl Oleate & Coco Glucoside, Xanthan Gum, Fragrance, Sodium Benzoate, Potassium Sorbate and  Sodium Gluconate.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\n Apply Iha- Acne Wash Natural on wet face. Gently massage in circles with fingertips to work up lather. Wait for few seconds & rinse off with fresh water.\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician\r\n</p>\r\n', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'acne-wash-face-wash', 'Acne Wash Face Wash', 'Acne Wash Face Wash', 'Acne Wash Face Wash', '100'),
(32, 'Neem Essential Face Wash', 'neem-essntial.png', '<p class="pro-desc-123">\r\n\r\nNeem Essentials  Iha Neem Essentials Natural Face Wash is a 100 % soap free facial cleanser fortified with anti-infective virtues of neem, clove & grape. Neem Essentials offers a completely ayurvedic & holistic treatment for oily and acne prone skin. When used regularly it cleanse facial skin of oily secretions & infections & makes the skin clean, fresh & healthy.\r\n</p>\r\n<p class="pro-desc-123">\r\nIHA Vedic Acne Face wash is the best ayurvedic facewash for acne and oily skin. Iha Vedic Beauty has a range of good face wash for men and women.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach ml contains natural extracts of Neem (Azadirachta Indica Leaf  Distillate) 50 mg, Cucumber (Cucumis Sativus Fruit Juice )30 mg, Bijapura Lemon (Citrus medica Fruit Extract), 30 mg Aloe Vera (Aloe Vera Leaf Juice) 10 mg, Grape (Vitis  Vinifera Fruit) 5 mg, Indian Basil (Ocimum Sanctum Leaf Oil) 0.25 mg & Clove (Syzigium Caryophyllus Bud Oil) 0.025 mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Sodium Cocyl Glycinate, Coco Amido Propyl Betaine, Decyl Glucoside, Gluceryl Oleate & Coco Glucoside, Xanthan Gum, Fragrance, Sodium Benzoate, Potassium Sorbate and  Sodium Gluconate\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nMake your face wet. Apply Iha - Neem Essentials Face Wash and massage with finger tips to work up lather. Wait for few seconds and rinse off with water.\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician\r\n</p>', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'neem-essential-face-wash', 'Neem Essential Face Wash', 'Neem Essential Face Wash', 'Neem Essential Face Wash', '100'),
(33, 'Aloe Essential Face Wash', 'aloe-essntials.png', '<p class="pro-desc-123">\r\n\r\n Iha Aloe Essential is a pure natural 100 % soap free facial cleanser that hydrates and smoothes the skin while providing it with a refreshing sensation. Natural extracts of Neem, Turmeric, Basil & Mango Ginger fights infections, helps unclog pores and reduces excess oiliness from skin. Moisturizing Aloe Vera ensures that your skin is not dried out and that it retains natural moisture.\r\n</p>\r\n<p class="pro-desc-123">\r\nIHA Vedic Essential Moisturising Face Wash is the best natural face wash for sensitive skin. It comes under the premium range of sensitive skin face wash.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach ml contains natural extracts of Aloe (Aloe Vera Leaf Juice) 30mg,  Neem  (Azadirachta Indica Leaf) 10mg, Turmeric (Curcuma Longa Rhizome) 10 mg, Bijapura Lemon  (Citrus Bijapura Fruit) 20mg, Basil  (Ocimum Sanctum Leaf)   10mg,  Indian Beech (Pongamia Pinnata Root) 5mg, Ginger (Zingiber Officinale Rhizome) 5mg, Mango ginger (Curcuma Amada Rhizome ) & Red Sandal wood (Pterocarpus Santilinus wood) 2.5mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Sodium Cocyl Glycinate, Coco Amido Propyl Betaine, Xanthan Gum, Guar Gum, Fragrance, Sodium Benzoate & Vitamin E Acetate\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nMakes your face wet. Apply Iha Aloe Essential and massage with finger tips to work up lather. Wait for few seconds and rinse off with water.\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\n Avoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician.\r\n</p>', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'aloe-essential-face-wash', 'Aloe Essential Face Wash', 'Aloe Essential Face Wash', 'Aloe Essential Face Wash', '100'),
(34, 'Skin Dew( Moisturiser)', 'skin-dew.png', '<p class="pro-desc-123">\r\nSKIN DEW is a natural skin moisturiser enriched with Almond Oil, Aloe Vera, Gotukola, Cucumber & Sunflower Oil that replenishes the skin s natural moisture & vital lipids. It promotes skin health and makes skin soft, supple, firm, youthful & visibly radiant.  \r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nAloe (Aloe Barbadensis Leaf Juice) 100mg,  Sunflower  Oil (Helianthus Annuus Seed Oil) 75mg, Indian Gotukola (Centella Asiatica W/Herb )50mg, Cucumber (Cucumis Sativus Fruit Extract) 50mg, Kokam Butter(Garcinia Indica Seed Oil), 2.5 mg & Almond Oil (Prunus amygdalus Amara Seed Oil) 2.5 mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water,Isopropyl  Myristate, Glycerine, Stearic Acid, Glyceryl MonoStearate, Sodium Perborate, Fragrance, Ceteareth 20, Vitamne E Acetate, Sodium Benzoate & Potassium Sorbate.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nApply Iha- Skin Dew on your face, throat and other body parts showing signs of dry skin condition. Gently massage in circles with fingertips to till the cream get absorbed into your skin\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician.\r\n</p>\r\n', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'skin-dew-moisturiser', 'Skin Dew Moisturiser', 'Skin Dew Moisturiser', 'Skin Dew Moisturiser', '100'),
(35, 'Bio Sun Shield Sun Screen', 'bio-sheild.png', '<p class="pro-desc-123">\r\n\r\nIHA Bio Sunshield is a 100 % natural Anti - Sunburn Lotion & a Natural- Sunscreen free from all the chemical sunscreens & UV filters. IHA Bio Sunshield â€“ Anti Sunburn Lotion protects the skin from damaging effects of UV A & UV B Rays.  It helps protect skin from skin erythema (reddening), sunburn, scald, skin darkening (tanning) & photo-ageing. It not only protects but also helps in soothing & healing sunburn and UV rays induced damages to the skin. \r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n Rose Water (Rosa Centifolia Flower Distillate) 25 mg,  Vetiver  (Vetiveria Zizaniodes  Rhizome Distillate)  25 mg,  Aloe Vera (Aloe Vera Leaf Ext.) 10 mg, Indian Gotukola (Centella Asiatica W/ Herb) 10 mg,  Spearmint (Mentha Spicata Leaf) 10 mg, Indian Drumstick (Moringa Oleifera Leaf) 5 mg,  Licorice (Glycyrrhiza Glabra Roots) 5 mg, Beautyberry (Callicarpa Macrophylla Flowers 2.5mg, Jasmine (Jasminum Officinale Flowers) 2.5mg and  Annatto (Bixa Orellana Seed) 2.5mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Caprylic Capric Triglycerides, Kaolin, Glycerol, Glyceryl Stearate Citrate, Stearic Acid, Iso Amyl Laurate, Sorbitan Olivate & Sorbitan Palmitate, Fragrance, Sodium Benzoate, Cetyl Palmitate, Xanthan Gum, Potassium Sorbate, Sodium Gluconate and Vitamin E Acetate.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nWash your face & pat dry.  Apply Bio Sunshield Natural Anti Sunburn Lotion 15 to 30 minutes before expected sun exposure. Re-application of sunscreen every 1 to 2 hours is also advised. It\r\nis also important to apply lotion liberally. Spreading the product too thin may not achieve the desired degree of protection.\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\n Avoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician.\r\n</p>', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'bio-sun-shield-sun-screen-lotion', 'Bio Sun Shield Sun Screen Lotion', 'Bio Sun Shield Sun Screen Lotion', 'Bio Sun Shield Sun Screen Lotion', '100'),
(36, 'Bio Pure  Natural Cleansing', 'bio-pure.png', '<p class="pro-desc-123">\r\n\r\nIHA Bio-Pure Natural is an ayurvedic, purifying & detoxifying cleansing milk that extracts the toughest of dirt, grime, pollutants, toxins & make-up traces, while preserving the moisture balance of dry, sensitive or delicate skin. Infused with pure natural ayurvedic, detoxifying actives, this very light creamy cleansing milk gives an instant feeling of comfort and well-being to dry and sensitive skins without any oily or tacky feel. From very first application of this soothing milk you will find your skin perfectly clean, clear, luminous, refreshed, supple and soft.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n Each ml contains natural extracts of Neem (Azadirachta Indica Leaf Distillate) 30 mg,Turmeric (Curcuma Longa Rhizome Distillate)20 mg, Aloe Vera (Aloe Vera Leaf) 20 mg, Lemon (Citrus Limon Fresh Juice)10 mg, Spearmint (Mentha Spicata Leaf )10 mg, Indian Basil (Ocimum Sanctum Leaf) 5 mg, Mango Ginger (Curcuma Amada Rhizome) 5 mg and Pomegranate (Punica Granatum Fruit & Rind) 5 mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Caprylic Capric Triglycerides,  Glyceryl Stearate Citrate, Glycerol, Stearic Acid, Iso Amyl Laurate Sorbitan Olivate & Sorbitan Palmitate, Fragrance, Sodium Benzoate Potassium Sorbate, Sodium Gluconate, Xanthan gum, Cetyl Palmitate and Vitamin E Acetate\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\n Apply Bio-Pure Natural to the face and throat; gently massage in circles with fingertips to dissolve make-up. Wipe-off any excess with a tissue and tone with a natural skin toner.\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician\r\n</p>', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'bio-pure--natural-cleansing', 'Bio Pure  Natural Cleansing', 'Bio Pure  Natural Cleansing', 'Bio Pure  Natural Cleansing', '100'),
(37, 'Aqua Neem Natural Skin Toner', 'auqa-neem.png', '<p class="pro-desc-123">\r\nAqua Neem :  IHA  AQUA NEEM is an ayurvedic,  SKIN TONER containing  pure, natural & ayurvedic ARKA( distillate) of Neem Leaf. Rich in potent antiseptic essential oil of neem,  Aqua Neem  Skin Toner,\r\n<ul>\r\n<li>gently cleanse the skin of  germs, toxins & pollutants,</li>\r\n<li>helps control acne & pimples,</li>\r\n\r\n<li>hydrates, tightens & tones the skin,</li>\r\n<li>minimizes derm-pores with its mild astringent action & keeps skin healthy & problem free,</li>\r\n<li>gently cleanse the skin of  germs, toxins & pollutants,</li>\r\n</ul>\r\n\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach ml. contains Neem  Arka (Azadirachta Indica Leaf Distillate)980mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Glycerine, Sodium Benzoate & Fragrance\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nWash your face & pat dry. Apply IHA - AQUA NEEM  to the face  using a cotton ball or finger tips.Wipe-off with a tissue. Try AQUA NEEM with Powder face packs also to prevent acne & pimples\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. In case of any allergic reaction or rash, discontinue the use of product & consult a physician.\r\n</p>\r\n', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'aqua-neem-natural-skin-toner', 'Aqua Neem Natural Skin Toner', 'Aqua Neem Natural Skin Toner', 'Aqua Neem Natural Skin Toner', '100'),
(38, 'Zweta (Skin Lightening Cream) Natural', 'zweta.png', '<p class="pro-desc-123">\r\nZweta Natural Cream is a unique and rare blend of potent ayurvedic herbal extracts of Mulberry, Almondette, Annatto, Saffron and Indian Gotukola. Reputed for their efficacy in treating various pigmentation problems like dark skin, age-spots, blemishes, freckles, burn scars, nail marks & pimple scars, these ayurvedic herbal extracts offer a complete recipe for a lighter, even toned, smooth & spotless skin.\r\n<ul>\r\n<li>Remarkably & Visibly lightens color for a fair & lighter skin tone.</li>\r\n<li> Lightens & heals sun-induced dark & damaged skin.</li>\r\n<li> Achieves noticeable fading of age spots, pimple-marks,  pigmentation & blemishes.,</li>\r\n<li> Lighter, softer, radiant and even toned skin.</li>\r\n</ul>\r\n\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach gram contains natural extracts of Gotukola (Centella Asiatica W/Herb) 20 mg, Aloe Vera (Aloe Vera Leaf Juice)20 mg, Turmeric (Curcuma Longa Rhizome) 10 mg, Brassica  Napus Seeds )10 mg, Licorice (Glycyrrhiza Glabra Root) 10 mg, Mulberry (Morus Alba Root) 10 mg, Indian Drumstick ( Moringa Oleifera Leaf) 5 mg, Indian Almondette (Buchanania Lanzans Seed)  5 mg, Annatto (Bixa Orellana Seed) 5 mg & Saffron (Crocus Sativus Stigma) 0.05 mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Caprylic Capric Triglycerides, Glyceryl Stearate Citrate, Stearic Acid, Sorbitan Olivate & Sorbitan Palmitate, Glycerol, Cetyl Palmitate, Iso Amyl Laurate,Fragrance Sodium Benzoate, Xanthan gum, Potassium Sorbate, Sodium Gluconate, Vitamin E Acetate & Natural Colour ( Arnibia Nobilis  Root Extract).\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nWash face with a mild soap or face wash and pat dry. Apply Zweta natural Cream on face and massage for few minutes\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens accidently, rinse eyes thoroughly with fresh water.\r\n</p>\r\n', 125.00, 'ml', 1, 0, '0', 4, 0, '', 'zweta-skin-lightening-cream-natural', 'Zweta (Skin Lightening Cream) Natural', 'Zweta (Skin Lightening Cream) Natural', 'Zweta (Skin Lightening Cream) Natural', '100'),
(39, 'Biospume 150ml', 'bioshampoo-150.png', '<p class="pro-desc-123">\r\nIHA Biospume is a perfect natural recipe for harmless care & shine for all hair types. Fortified with natural conditioners & nourishers like heena, shikakai, Bhringraj, Khadira, Reetha, Jatamansi and Japakusum, Biospume\r\n<ul>\r\n<li>Nourishes & promotes growth of healthy & luxuriant hair</li>\r\n<li> Leaves hair soft & shiny with more volume & bounce</li>\r\n<li> It is an effective defense against dry hair & scalp </li>\r\n</ul>\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\nBiospume shampoo is the best shampoo for dandruff and damaged hair. Iha has designed this ayurvedic hair loss shampoo for men and women both. Biospume is the best moisturizing shampoo.</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach ml. contains natural extracts of Bhringraj Leaf (Eclipta Alba) 75mg, Heena Leaf (Lawsonia Inermis) 50mg, Reetha Fruit(Sapindus Emarginatus) 50mg, Shikakai Pods(Acacia Concinna) 50mg,  Khadira Stem(Acacia Catechu) 50mg, Japakusum Flower (Hibiscus Rosa-sinensis) 50mg & Jatamansi (Nardostachys Jatamansi) 45mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Sodium Laureth Sulphate, Fragrance, Sodium Chloride, Metyhl Paraben Sodium, Propyl Paraben Sodium and C.I. 19140.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nApply a small quantity of Biospume on to scalp and hair from roots to tips and massage for few minutes to produce lather, then rinse off\r\n</p>', 150.00, 'ml', 1, 0, '0', 5, 0, '', 'biospume-150ml', 'Biospume 150ml', 'Biospume 150ml', 'Biospume 150ml', '144'),
(40, 'Biospume Shampoo -300', 'bio-shampoo-300.png', '<p class="pro-desc-123">\r\nIHA Biospume is a perfect natural recipe for harmless care & shine for all hair types. Fortified with natural conditioners & nourishers like heena, shikakai, Bhringraj, Khadira, Reetha, Jatamansi and Japakusum, Biospume\r\n<ul>\r\n<li>Nourishes & promotes growth of healthy & luxuriant hair</li>\r\n<li> Leaves hair soft & shiny with more volume & bounce</li>\r\n<li> It is an effective defense against dry hair & scalp </li>\r\n</ul>\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\nBiospume shampoo is the best shampoo for dandruff and damaged hair. Iha has designed this ayurvedic hair loss shampoo for men and women both. Biospume is the best moisturizing shampoo.</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach ml. contains natural extracts of Bhringraj Leaf (Eclipta Alba) 75mg, Heena Leaf (Lawsonia Inermis) 50mg, Reetha Fruit(Sapindus Emarginatus) 50mg, Shikakai Pods(Acacia Concinna) 50mg,  Khadira Stem(Acacia Catechu) 50mg, Japakusum Flower (Hibiscus Rosa-sinensis) 50mg & Jatamansi (Nardostachys Jatamansi) 45mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Sodium Laureth Sulphate, Fragrance, Sodium Chloride, Metyhl Paraben Sodium, Propyl Paraben Sodium and C.I. 19140.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nApply a small quantity of Biospume on to scalp and hair from roots to tips and massage for few minutes to produce lather, then rinse off\r\n</p>\r\n', 300.00, 'ml', 1, 0, '0', 5, 0, '', 'biospume-shampoo--300', 'Biospume Shampoo -300', 'Biospume Shampoo -300', 'Biospume Shampoo -300', '72'),
(41, 'Biospume (Shampoo) 500ml', 'bioshampoo-500.png', '<p class="pro-desc-123">\r\nIHA Biospume is a perfect natural recipe for harmless care & shine for all hair types. Fortified with natural conditioners & nourishers like heena, shikakai, Bhringraj, Khadira, Reetha, Jatamansi and Japakusum, Biospume\r\n<ul>\r\n<li>Nourishes & promotes growth of healthy & luxuriant hair</li>\r\n<li> Leaves hair soft & shiny with more volume & bounce</li>\r\n<li> It is an effective defense against dry hair & scalp </li>\r\n</ul>\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\nBiospume shampoo is the best shampoo for dandruff and damaged hair. Iha has designed this ayurvedic hair loss shampoo for men and women both. Biospume is the best moisturizing shampoo.</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach ml. contains natural extracts of Bhringraj Leaf (Eclipta Alba) 75mg, Heena Leaf (Lawsonia Inermis) 50mg, Reetha Fruit(Sapindus Emarginatus) 50mg, Shikakai Pods(Acacia Concinna) 50mg,  Khadira Stem(Acacia Catechu) 50mg, Japakusum Flower (Hibiscus Rosa-sinensis) 50mg & Jatamansi (Nardostachys Jatamansi) 45mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Sodium Laureth Sulphate, Fragrance, Sodium Chloride, Metyhl Paraben Sodium, Propyl Paraben Sodium and C.I. 19140.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nApply a small quantity of Biospume on to scalp and hair from roots to tips and massage for few minutes to produce lather, then rinse off\r\n</p>\r\n', 500.00, 'ml', 1, 0, '0', 5, 0, '', 'biospume-shampoo-500ml', 'Biospume Shampoo 500ml', 'Biospume Shampoo 500ml', 'Biospume Shampoo 500ml', '48'),
(42, 'Kerasoft ( Hair Conditioner) 150ml', 'kera-soft-150.png', '<p class="pro-desc-123">\r\nA gentle hair conditioner infused with goodness of hair nourishers & anti-infective herbal actives like Neem, Tulsi, Lemon, Shikakai & Kapurkachri that,\r\n<ul>\r\n<li>Leaves hair absolutely soft & luminous</li>\r\n<li>Prevents dry hair & premature hair fall</li>\r\n<li>Nourishes hair & scalp with hair strengthening  benefits</li>\r\n</ul>\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\nIHA Vedic Beauty has created a wide range of ayurvedic best hair conditioners for men and women. Keraosft is the best conditioner for dry hair. In this environment, leave in conditioner for men is a must option and so is the deep conditioners for dry hair.</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n Each ml. contains natural extracts of Lemon Fruit Peel (Citrus Limon) 120mg, Kapur kachari Root (Hedychium Spicatum) 60mg, Shikakai Pods (Acacia Concinna) 60mg, Tulsi Leaf Oil (Ocimum Sanctum) 25mg & Neem Seed Oil (Azadirachta Indica) 20mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Glyceryl Stearate, Cetyl Alcohol, Fragrance, Metyhl Paraben Sodium and Propyl Paraben Sodium.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nApply a small quantity of Kerasoft after shampoo on to scalp and hair from roots to tips and massage for few minutes. Rinse off\r\n</p>\r\n', 150.00, 'ml', 1, 0, '0', 5, 0, '', 'kerasoft-hair-conditioner-150ml', 'Kerasoft Hair Conditioner 150ml', 'Kerasoft Hair Conditioner 150ml', 'Kerasoft Hair Conditioner 150ml', '144'),
(43, 'Kerasoft ( Hair Conditioner) 300ml', 'kera-soft-150.png', '<p class="pro-desc-123">\r\nA gentle hair conditioner infused with goodness of hair nourishers & anti-infective herbal actives like Neem, Tulsi, Lemon, Shikakai & Kapurkachri that,\r\n<ul>\r\n<li>Leaves hair absolutely soft & luminous</li>\r\n<li>Prevents dry hair & premature hair fall</li>\r\n<li>Nourishes hair & scalp with hair strengthening  benefits</li>\r\n</ul>\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\nIHA Vedic Beauty has created a wide range of ayurvedic best hair conditioners for men and women. Keraosft is the best conditioner for dry hair. In this environment, leave in conditioner for men is a must option and so is the deep conditioners for dry hair.</p>\r\n\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\n Each ml. contains natural extracts of Lemon Fruit Peel (Citrus Limon) 120mg, Kapur kachari Root (Hedychium Spicatum) 60mg, Shikakai Pods (Acacia Concinna) 60mg, Tulsi Leaf Oil (Ocimum Sanctum) 25mg & Neem Seed Oil (Azadirachta Indica) 20mg.\r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Glyceryl Stearate, Cetyl Alcohol, Fragrance, Metyhl Paraben Sodium and Propyl Paraben Sodium.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nApply a small quantity of Kerasoft after shampoo on to scalp and hair from roots to tips and massage for few minutes. Rinse off\r\n</p>\r\n', 300.00, 'ml', 1, 0, '0', 5, 0, '', 'kerasoft-hair-conditioner-300ml', 'Kerasoft ( Hair Conditioner) 300ml', 'Kerasoft ( Hair Conditioner) 300ml', 'Kerasoft ( Hair Conditioner) 300ml', '72'),
(44, 'Suzoka (Ayurvedic Facial Cleanser) 40gm', 'suzuka.png', '<p class="pro-desc-123">\r\n\r\nSuzoka (Ayurvedic Facial Cleanser) :  This delicate facial cleanser is a gentle and effective natural blend of Turmeric, Saffron and Blue Lotus in combination with Sweet Cherry, Mulberry & Licorice.\r\n\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\nThis facial cleanser softens your skin, leaving your face radiant & shining. It gently cleanses the skin while it works to smooth the skin s texture and soften the skin s tone. Your skin will be forever grateful for its new hydrated, vibrant and youthful appearance.\r\n</p>\r\n\r\n\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nWash your face with fresh water. Apply Suzoka - Facial Cleanser on your face and massage in circular motion for few minutes. Rinse off with fresh water & pat dry.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. Discontinue the use of product in case of any allergic reaction or rash and consult a physician\r\n</p>', 40.00, 'gm', 1, 0, '0', 6, 0, '', 'suzoka-ayurvedic-facial-cleanser-40gm', 'Suzoka Ayurvedic Facial Cleanser 40gm', 'Suzoka Ayurvedic Facial Cleanser 40gm', 'Suzoka Ayurvedic Facial Cleanser 40gm', '48'),
(45, 'Caarvi (Ayurvedic Massage Cream) 40gm', 'caarvi.png', '<p class="pro-desc-123">\r\nCaarvi (Ayurvedic Massage Cream) : IHA Caarvi is a very mild moisturizing skin lightening cream that quickly penetrates into the deeper layers of your skin and works from inside on skin pigmentations, pimple marks, scars & extra dark skin. Its potent actives like Blue Lotus, Licorice, Saffron,Mulberry & Mustard works on hyper-pigmentation, marks & dark skin right from very first application and helps make skin lighter, brighter, smoother, even toned & visibly radiant.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\n Apply Caarvi Skin Lightening Cream on face and throat and massage as per the instructions given for Facial Marma Massage, focusing on the marma points. Massage for at least 15 minutes to achieve the desired results.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\n Avoid contact with eyes. If this happens, rinse eyes thoroughly with water. Discontinue the use of product in case of any allergic reaction or rash and consult a physician\r\n</p>\r\n', 40.00, 'gm', 1, 0, '0', 6, 0, '', 'caarvi-ayurvedic-massage-cream-40gm', 'Caarvi (Ayurvedic Massage Cream) 40gm', 'Caarvi (Ayurvedic Massage Cream) 40gm', 'Caarvi (Ayurvedic Massage Cream) 40gm', '48'),
(46, 'Zubhra (Ayurvedic Face Mask) ', 'zubhara.png', '<p class="pro-desc-123">\r\nZubhra (Ayurvedic Face Mask) :  Infused with powerful skin lightening (Mulberry, Licorice & Indian Gotukola), Protective (Neem & Basil) & healing\r\n<br/>\r\n(Cucumber, Aloe Vera & Lotus) herbal actives, this skin lightening & brightening  mask provide your skin with the smooth complexion and makes skin even toned. The skin lightening and Anti marks properties of Mulberry & Licorice  lighten and clear the complexion, giving you a healthier looking and more youthful appearance. With your skin feeling as soft as velvet, you will maintain a radiant & spotless glow for a longer time\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\nApply Face Mask liberally on wet face and throat in a thick uniform layer. Allow it to dry or wait for 20-30 minutes and then rinse off with fresh water.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\n Avoid contact with eyes. If this happens, rinse eyes thoroughly with water. Discontinue the use of product in case of any allergic reaction or rash and consult a physician.\r\n</p>', 40.00, 'ml', 1, 0, '0', 6, 0, '', 'zubhra-ayurvedic-face-mask', 'Zubhra Ayurvedic Face Mask', 'Zubhra Ayurvedic Face Mask', 'Zubhra Ayurvedic Face Mask', '48'),
(47, 'Yazas Facial Cleanser', 'yazas.png', '<p class="pro-desc-123">\r\n\r\nA soft creamy cleanser with natural goodness of Neem, Lemon & Mango-ginger that gently & deeply cleanse your face of dirt, grime, toxins, germs and pollutants and makes it scrupulously clean and fresh. Natural actives like Licorice, Barberry & Turmeric promotes skin health & healing and results in clean, fresh, well hydrated, youthful and  vibrant skin.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nNeem (Azadirachta Indica Leaf Distillate) 50 mg, Lemon (Citrus Limon Fruit Juice ) 30 mg,  Aloe Vera(Aloe Vera Leaf Juice) 10 mg,  Gotukola (Centella Asiatica W/ P Ext.) 10mg, Licorice (Glycyrrhiza Glabra Root )10mg, Turmeric (Curcuma Longa Rhizome) 5mg, Mango Ginger (Zingiber Amada Rhizome ) 5  mg, Bush Turmeric (Coscinum Fenestratum Root & Stem) 2.5 mg, Barberry (Berberis Aristata Stem) 2.5 mg and Indian Basil (Ocimum Sanctum Leaf Oil)0.5 mg.\r\n \r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Stearic Acid, Glycerine, Caprylic â€“ Capric Triglycerides, Cetyl Palmitate, Fragrance, Potassium Hydroxide, Sodium Benzoate, Potassium Sorbate, Sodium Gluconate and Vitamin E Acetate.\r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\n Apply IHA YAZAS  Facial Cleanser on a moist  face and gently massage in upward circular motion for few minutes. Rinse off with fresh water\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. Discontinue the use of product in case of any allergic reaction or rash and consult a physician.\r\n</p>\r\n', 40.00, 'g', 1, 0, '0', 6, 0, '', 'yazas-facial-cleanser', 'Yazas Facial Cleanser', 'Yazas Facial Cleanser', 'Yazas Facial Cleanser', '48'),
(48, 'Ozas Extra Facial Scrub', 'ozas.png', '<p class="pro-desc-123">\r\nDesigned especially to deep clean pores, get rid of skin black heads & dead skin and to prevent blemishes immediately, IHA OZAS Facial Scrub gently exfoliates skin deeply for lasting purification, polishes skin for a soft and glowing complexion and refines skin for a spotless, healthy & even toned skin.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach gram contains Walnut (Juglans Regia Shell Grains) 40mg and natural extracts of Indian Gotukola (Centella Asiatica Whole Herb) 15 mg, Indian Madder (Rubia Cordifolia Stem) 10mg, Turmeric (Curcuma Longa Rhizome) 10mg, Licorice (Glycyrrhiza Glabra Root) 10mg, Barberry (Berberis Aristata Stem) 5mg, Mango Ginger (Curcuma Amada Rhizome) 5mg, Red Sandal (Pterocarpus Santilinus Wood) 2.5 mg, Indian Drumstick (Moringa Oleifera Leaves) 2.5 mg and Saffron (Crocus Sativus Stigma) 0.05mg\r\n \r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Glyceryl Stearate Citrate, Stearic Acid, Glycerine, Cetyl Palmitate, Caprylic - Capric Triglycerides, Cetearyl Olivate & Sorbitan Olivate, Iso Amyl Laurate, Fragrance, Sodium Cocyl Glycinate, Sodium Benzoate, Xanthan Gum, Potassium Sorbate and Sodium Gluconate.\r\n \r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\n Apply IHA OZAS  Facial Scrub on a moist cleaned  face and gently massage in upward circular motion for few minutes. Rinse off with fresh water.\r\n</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. Discontinue the use of product in case of any allergic reaction or rash and consult a physician.\r\n</p>\r\n', 40.00, 'g', 1, 0, '0', 6, 0, '', 'ozas-extra-gentle-facial-scrub', 'Ozas Extra Gentle Facial Scrub', 'Ozas Extra Gentle Facial Scrub', 'Ozas Extra Gentle Facial Scrub', '48');
INSERT INTO `gp_products` (`product_id`, `product_name`, `product_image`, `product_description`, `product_price`, `product_price_unit`, `product_status`, `feature_status`, `sort`, `cat_id`, `sub_cat_id`, `sub_product`, `product_seo_url`, `product_meta_desc`, `product_meta_keyword`, `product_title`, `case_size`) VALUES
(49, 'Shreyas Antiwrinkle Cream', 'shreyaz..png', '<p class="pro-desc-123">\r\n Fortified with potent rejuvenating, nourishing & moisturizing herbal actives, IHA SHREYAZ- Nourishing  Anti Wrinkle Cream supplies nutrition and vitality to the skin.  It treats fine lines and wrinkles around eyes, improves skin s elasticity and firmness. It replenishes skin moisture and retards formation of age spots to leave your skin younger, smoother, even-toned and healthy looking.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach gram contains natural extracts of Aloe Vera (Aloe Vera Leaf  Juice) 20 mg, Pink Lotus (Nelumbo Nucifera Flower)10 mg, Indian Madder (Rubia Cordifolia Root ) 10 mg,  Indian Gotukola (Centella Asiatica Whole Herb)10 mg, Licorice(Glycyrrhiza Glabra Root Ext) 10 mg, Blue Lotus (Nymphaea Stellata Flower ) 5 mg, Mustard (Brassica Campestris/Napus Seed) 5mg, Jasmine (Jasminum Officinale Leaf) 5mg, Birds Cherry (Prunus Cerasoides Wood) 2.5 mg, and Saffron (Crocus Sativus Stigma) 0.05 mg.\r\n\r\n \r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\nPurified Water, Fractionated Coconut Oil (Caprylic Capric Triglycerides), Glyceryl Stearate Citrate, Sorbitan Olivate & Sorbitan Palmitate, Glycerol, Stearic Acid, Cetyl Palmitate, Iso Amyl Laurate, Fragrance, Beet Root Extract, Sodium Benzoate, Xanthan Gum, Potassium Sorbate, Sodium Gluconate and Vitamin E Acetate.\r\n \r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\n  After cleansing, apply IHA SHREYAZ Anti wrinkle Cream gently on face and throat until absorbed. For best results, apply in the morning and evening</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. Discontinue the use of product in case of any allergic reaction or rash and consult a physician.\r\n</p>\r\n\r\n', 40.00, 'g', 1, 0, '0', 6, 0, '', 'shreyas-antiwrinkle-cream', 'Shreyas Antiwrinkle Cream', 'Shreyas Antiwrinkle Cream', 'Shreyas Antiwrinkle Cream', '48'),
(50, 'Tezas Wrinkle Lift Face Mask', 'tezas.png', '<p class="pro-desc-123">\r\nIHA TEZAS - Wrinkle Lift Face Mask is all natural & ayurvedic Face Mask. Enriched with natural extracts of precious rejuvenating herbs, it helps diminish the appearance of wrinkles and fine lines, improves elasticity & firmness of facial skin & throat. It also helps to fight problems of ageing skin like dry, rough skin, age spots and pigmentation. It calms the skin of environmental stresses and rejuvenates it back to the smooth, even-toned & youthful glowing skin.\r\n</p>\r\n <p class="pro-desc-123">\r\n<h4> <strong>Active Ingredients :</strong></h4>\r\nEach gram contains natural extracts of  Aloe Vera (Aloe Vera Leaf Extract) 30 mg, Sweet Cherry (Prunus Avium Seed ) 5 mg, Turmeric (Curcuma Longa Rhizome ) 5 mg, Beauty Berry (Callicarpa Macrophylla Fruit ) 5 mg,  Drumstick Tree (Moringa Oleifera Leaf) 2.5 mg, Licorice (Glycyrrhiza Glabra Root ) 2.5 mg,  Barberry (Berberis Aristata Rhizome )  2.5 mg, Fenugreek (Trigonella Foenum Graecum Seed ) 2.5 mg, Indian Gotukola (Centella Asiatica Whole Herb) 2 mg & Mango Ginger(Curcuma Amada Rhizome) 1 mg,\r\n\r\n \r\n</p>\r\n\r\n <p class="pro-desc-123">\r\n <h4> <strong>Other Ingredients :</strong></h4>\r\n Purified Water, Kaolin, Bentonite, Glycerine, Glyceryl Stearate, Stearic Acid, Cetearyl Olivate & Sorbitan Olivate, Xanthan Gum, Cetyl Palmitate, Fragrance, Sodium Benzoate,Potassium Sorbate and Sodium Gluconate.\r\n \r\n</p>\r\n<p class="pro-desc-123">\r\n  <h4> <strong>How to use :</strong></h4>\r\n Wash your face with fresh water and pat dry. Apply TEZAS Face Mask in a smooth & uniform layer on face & throat, avoiding eye contours. Wait for 20 minutes or allow it to dry then rinse off with fresh water.</p>\r\n\r\n<p class="pro-desc-123">\r\n<h4> <strong>Caution :</strong></h4>\r\nAvoid contact with eyes. If this happens, rinse eyes thoroughly with water. Discontinue the use of product in case of any allergic reaction or rash and consult a physician.\r\n</p>', 40.00, 'g', 1, 0, '0', 6, 0, '', 'tezas-wrinkle-lift-face-mask', 'Tezas Wrinkle Lift Face Mask', 'Tezas Wrinkle Lift Face Mask', 'Tezas Wrinkle Lift Face Mask', '48'),
(51, 'Kit Yazas Ozas Shreyas Tezas Rejunena 12 g Each', 'kit-y-o-s-t.png', '<p class="pro-desc-123">\r\n\r\n This combo is pack of 2. It contains:\r\n<br/>\r\n    Yazas  - Facial Cleanser<br/>\r\n    Ozas   - Facial Scrub\r\n</p>\r\n\r\n\r\n<h4> <strong>Yazas(40gm)</strong></h4>\r\n\r\n<p class="pro-desc-123">\r\n    Deeply cleanse your face of dirt, grime, toxins, germs and pollutants\r\n    Promotes skin health & healing<br/>\r\n     Results in clean, fresh, well hydrated, youthful and  vibrant skin.\r\n\r\n\r\n\r\n<h4> <strong>Ozas(40gm)</strong></h4>\r\n\r\n\r\n<p class="pro-desc-123">\r\n    Designed especially to deep clean pores<br/>\r\n    Get rid of black heads & dead skin<br/>\r\n     Prevent blemishes<br/>\r\n    Polishes skin for a soft and glowing complexion<br/>\r\n    Refines skin for a spotless, healthy & even toned skin.\r\n</p>', 60.00, 'gm', 1, 0, '0', 6, 0, '', 'kit-yazas-ozas-shreyas-tezas-rejunena-12-g-each', 'Kit Yazas Ozas Shreyas Tezas Rejunena 12 g Each', 'Kit Yazas Ozas Shreyas Tezas Rejunena 12 g Each', 'Kit Yazas Ozas Shreyas Tezas Rejunena 12 g Each', '48');

-- --------------------------------------------------------

--
-- Table structure for table `gp_products_category`
--

CREATE TABLE `gp_products_category` (
  `r_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sub_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_products_category`
--

INSERT INTO `gp_products_category` (`r_id`, `cat_id`, `product_id`, `sub_cat`) VALUES
(7, 2, 23, 0),
(10, 2, 0, 0),
(44, 2, 22, 0),
(47, 2, 24, 0),
(48, 2, 25, 0),
(49, 2, 26, 0),
(50, 2, 27, 0),
(51, 2, 28, 0),
(52, 2, 29, 0),
(53, 3, 30, 0),
(54, 4, 31, 0),
(55, 4, 32, 0),
(56, 4, 33, 0),
(57, 4, 34, 0),
(58, 4, 35, 0),
(59, 4, 36, 0),
(60, 4, 37, 0),
(61, 4, 38, 0),
(62, 5, 39, 0),
(63, 5, 40, 0),
(64, 5, 41, 0),
(65, 5, 42, 0),
(66, 5, 43, 0),
(67, 6, 44, 0),
(68, 6, 45, 0),
(69, 6, 46, 0),
(70, 6, 47, 0),
(71, 6, 48, 0),
(72, 6, 49, 0),
(73, 6, 50, 0),
(74, 6, 51, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gp_product_details`
--

CREATE TABLE `gp_product_details` (
  `d_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_product_details`
--

INSERT INTO `gp_product_details` (`d_id`, `p_id`, `name`, `value`) VALUES
(2, 1, 'test2', '22'),
(3, 2, 'Width', '2-126 inch'),
(4, 2, 'Pattern', 'Plain,Printed'),
(5, 2, 'Color', 'We have wide range of 26 colours and we can develop colours as per clients requirement.'),
(6, 2, 'GSM', '10-300'),
(7, 2, 'Use', 'Hospital ,Agriculture ,Home Textile ,Hygiene ,Packaging'),
(8, 7, 'Width', '35-36,44-45'),
(9, 7, 'Pattern', 'Plain'),
(10, 7, 'Color', 'White'),
(11, 7, 'Use', 'Hospital ,Home Textile ,Hygiene '),
(12, 8, 'GSM', '50-100 ,100-150,150-200,200-250,250-300'),
(13, 8, 'Use', 'Hospital ,Hygiene '),
(14, 13, 'Size', 'As per requirement'),
(15, 13, 'Customized', 'Yes'),
(16, 15, 'Color', 'Wide range of colours'),
(17, 15, 'Size', '10*12, 12*16, 16*20, 14*18 and as per requirements'),
(18, 16, 'Handmade', 'Yes'),
(19, 16, 'Capacity', '500gm,1kg,2kg,5kg'),
(20, 16, 'Color', 'As per requirents'),
(21, 16, 'Type', 'Shopping Bags ,Promotional Bags ,Packaging Bags'),
(22, 16, 'Style', 'Handled ,Rope Handle ,Folding'),
(23, 18, 'Weight', '25- 150 gram/sq. meter'),
(24, 18, 'Width', '100- 1200 mm'),
(25, 18, 'Coating', 'PE coating up to 50 micron'),
(26, 18, 'Fabric Roll Length:', 'As per buyer need'),
(27, 18, 'Procedure of production', 'Metallized film laminate on non woven fabric with extrusion technology'),
(28, 18, 'Material', 'polypropylene'),
(29, 18, 'Packing', 'Roll with?? tube and packed by poly bag (or as per buyer request)'),
(30, 18, 'Minimum Order', '1000 Kg'),
(31, 18, 'Delivery time', ' Within 2 Weeks'),
(32, 18, 'Payment terms', 'L/C or TT'),
(33, 18, 'Price Terms', 'FOB, CNF or CIF'),
(34, 14, 'Color', '	All colours are available and we can develop new colours as well.'),
(35, 14, 'Size', '8*10, 10*12, 12*16, 14*18, 16*20 and sizes can be developed as per clients requirement'),
(36, 19, 'Model', 'Tie and Ear loop'),
(37, 19, 'Usage', 'Hospital,Clinic,Laboratory,Food Industries'),
(38, 20, 'Size', '	18 inch double elastic'),
(42, 25, 'test2', 'test'),
(43, 25, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `gp_product_feature_products`
--

CREATE TABLE `gp_product_feature_products` (
  `featured_id` int(11) NOT NULL,
  `featured_product_name` text NOT NULL,
  `featured_product_image` text NOT NULL,
  `featured_product_url` text NOT NULL,
  `feature_active_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_product_feature_products`
--

INSERT INTO `gp_product_feature_products` (`featured_id`, `featured_product_name`, `featured_product_image`, `featured_product_url`, `feature_active_status`) VALUES
(9, 'Skin Care', 'kashish_paker.PNG', 'skin-care', 0),
(10, 'Foot Care', 'foot-care.jpg', 'foot-care', 0),
(11, 'Hair care', 'hair-care.jpg', 'hair-care', 1),
(12, 'Kit Pack', 'kit-pack.jpg', 'kit-yazas-ozas-shreyas-tezas-rejunena-12-g-each.php', 1),
(13, 'tst', 'cert3.jpg', 'as', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gp_subproduct`
--

CREATE TABLE `gp_subproduct` (
  `subproduct_id` int(11) NOT NULL,
  `subproductname` varchar(300) NOT NULL,
  `p_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gp_techincalspcfication`
--

CREATE TABLE `gp_techincalspcfication` (
  `t_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `tensile_strength1` varchar(20) NOT NULL,
  `tensile_strength2` varchar(20) NOT NULL,
  `elongation1` varchar(20) NOT NULL,
  `elongation2` varchar(20) NOT NULL,
  `sort` varchar(20) NOT NULL,
  `act_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_techincalspcfication`
--

INSERT INTO `gp_techincalspcfication` (`t_id`, `p_id`, `weight`, `tensile_strength1`, `tensile_strength2`, `elongation1`, `elongation2`, `sort`, `act_status`) VALUES
(3, 1, 'asas', 'asas', 'as', 'as', 'as', '', 0),
(4, 2, '50', '124', '82', '100', '100', '', 0),
(5, 2, '60', '144', '94', '100', '100', '', 0),
(6, 2, '65', '156', '101', '90', '90', '', 0),
(7, 2, '70', '168', '109', '90', '90', '', 0),
(8, 2, '80', '192', '125', '90', '90', '', 0),
(9, 2, '100', '220', '140', '80', '80', '', 0),
(10, 2, '150', '240', '180', '80', '80', '', 0),
(11, 3, '50', '124', '82', '100', '100', '', 0),
(12, 3, '60', '144', '94', '100', '100', '', 0),
(13, 3, '65', '156', '101', '90', '90', '', 0),
(14, 3, '70', '168', '109', '90', '90', '', 0),
(15, 3, '80', '192', '125', '90', '90', '', 0),
(16, 3, '100', '220', '140', '80', '80', '', 0),
(17, 3, '150', '240', '180', '80', '80', '', 0),
(18, 4, '50', '124', '82', '100', '100', '', 0),
(19, 4, '60', '144', '94', '100', '100', '', 0),
(20, 4, '65', '156', '101', '90', '90', '', 0),
(21, 4, '70', '168', '109', '90', '90', '', 0),
(22, 4, '80', '192', '125', '90', '90', '', 0),
(23, 4, '100', '220', '140', '80', '80', '', 0),
(24, 4, '150', '240', '180', '80', '80', '', 0),
(25, 5, '50', '124', '82', '100', '100', '', 0),
(26, 5, '60', '144', '94', '100', '100', '', 0),
(27, 5, '65', '156', '101', '90', '90', '', 0),
(28, 5, '70', '168', '109', '90', '90', '', 0),
(29, 5, '80', '192', '125', '90', '90', '', 0),
(30, 5, '100', '220', '140', '80', '80', '', 0),
(31, 5, '150', '240', '180', '80', '80', '', 0),
(32, 6, '50', '124', '82', '100', '100', '', 0),
(33, 6, '60', '144', '94', '100', '100', '', 0),
(34, 6, '65', '156', '101', '90', '90', '', 0),
(35, 6, '70', '168', '109', '90', '90', '', 0),
(36, 6, '80', '192', '125', '90', '90', '', 0),
(37, 6, '100', '220', '140', '80', '80', '', 0),
(38, 6, '150', '240', '180', '80', '80', '', 0),
(39, 7, '50', '124', '82', '100', '100', '', 0),
(40, 7, '60', '144', '94', '100', '100', '', 0),
(41, 7, '65', '156', '101', '90', '90', '', 0),
(42, 7, '70', '168', '109', '90', '90', '', 0),
(43, 7, '80', '192', '125', '90', '90', '', 0),
(44, 7, '100', '220', '140', '80', '80', '', 0),
(45, 7, '150', '240', '180', '80', '80', '', 0),
(46, 8, '50', '124', '82', '100', '100', '', 0),
(47, 8, '60', '144', '94', '100', '100', '', 0),
(48, 8, '65', '156', '101', '90', '90', '', 0),
(49, 8, '70', '168', '109', '90', '90', '', 0),
(50, 8, '80', '192', '125', '90', '90', '', 0),
(51, 8, '100', '220', '140', '80', '80', '', 0),
(52, 8, '150', '240', '180', '80', '80', '', 0),
(53, 17, '50', '124', '82', '100', '100', '', 0),
(54, 17, '60', '144', '94', '100', '100', '', 0),
(55, 17, '65', '156', '101', '90', '90', '', 0),
(56, 17, '70', '168', '109', '90', '90', '', 0),
(57, 17, '80', '192', '125', '90', '90', '', 0),
(58, 17, '100', '220', '140', '80', '80', '', 0),
(59, 17, '150', '240', '180', '80', '80', '', 0),
(60, 18, '50', '124', '82', '100', '100', '', 0),
(61, 18, '60', '144', '94', '100', '100', '', 0),
(62, 18, '65', '156', '101', '90', '90', '', 0),
(63, 18, '70', '168', '109', '90', '90', '', 0),
(64, 18, '80', '192', '125', '90', '90', '', 0),
(65, 18, '100', '220', '140', '80', '80', '', 0),
(66, 18, '150', '240', '180', '80', '80', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gp_user`
--

CREATE TABLE `gp_user` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `act_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_user`
--

INSERT INTO `gp_user` (`id`, `email`, `password`, `firstname`, `lastname`, `phone`, `role`, `created_at`, `act_status`) VALUES
(1, 'ihavedic-sar', '12345', 'Iha', 'Vedic', '909787', 1, '2016-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `category_id` int(11) NOT NULL,
  `cat_sub_id` int(11) DEFAULT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_seo_name` varchar(50) NOT NULL,
  `cat_sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`category_id`, `cat_sub_id`, `category_name`, `category_seo_name`, `cat_sort`) VALUES
(1, NULL, 'Item 0', 'Item-0', 1),
(2, NULL, 'Item 1', 'Item-1', 2),
(3, NULL, 'Item 2', 'Item-2', 3),
(4, NULL, 'Item 3', 'Item-3', 4),
(5, NULL, 'Item 4', 'Item-4', 5),
(6, NULL, 'Item 5', 'Item-5', 6),
(7, NULL, 'Item 6', 'Item-6', 7),
(8, 1, 'Item 0.1', 'item-0.1', 1),
(9, 1, 'Item 0.2', 'item-0-2', 2),
(10, 8, 'Item 0.1.1', 'item-0-1-1', 1),
(11, 8, 'Item 0.1.2', 'Item-0-1-2', 2),
(12, 10, 'Item 0.1.1.1', 'Item-0-1-1-1', 1),
(13, 10, 'Item 0.1.1.2', 'Item-0-1-1-2', 2),
(14, 2, 'Item 1.1', 'item-1-1', 1),
(15, 2, 'Item 1.2', 'item-1-2', 2),
(16, 3, 'Item 2.2', 'item-2-2', 2),
(17, 3, 'Item 2.1', 'item-2.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gp_banner`
--
ALTER TABLE `gp_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gp_category`
--
ALTER TABLE `gp_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `cat_sub_id` (`cat_sub_id`);

--
-- Indexes for table `gp_enquiry`
--
ALTER TABLE `gp_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gp_products`
--
ALTER TABLE `gp_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `PIndex` (`product_name`(767)),
  ADD KEY `product_name` (`product_name`(767));

--
-- Indexes for table `gp_products_category`
--
ALTER TABLE `gp_products_category`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `gp_product_details`
--
ALTER TABLE `gp_product_details`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `gp_product_feature_products`
--
ALTER TABLE `gp_product_feature_products`
  ADD PRIMARY KEY (`featured_id`);

--
-- Indexes for table `gp_subproduct`
--
ALTER TABLE `gp_subproduct`
  ADD PRIMARY KEY (`subproduct_id`);

--
-- Indexes for table `gp_techincalspcfication`
--
ALTER TABLE `gp_techincalspcfication`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `gp_user`
--
ALTER TABLE `gp_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `parent` (`cat_sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gp_banner`
--
ALTER TABLE `gp_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gp_category`
--
ALTER TABLE `gp_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gp_enquiry`
--
ALTER TABLE `gp_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gp_products`
--
ALTER TABLE `gp_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `gp_products_category`
--
ALTER TABLE `gp_products_category`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `gp_product_details`
--
ALTER TABLE `gp_product_details`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `gp_product_feature_products`
--
ALTER TABLE `gp_product_feature_products`
  MODIFY `featured_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gp_subproduct`
--
ALTER TABLE `gp_subproduct`
  MODIFY `subproduct_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gp_techincalspcfication`
--
ALTER TABLE `gp_techincalspcfication`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `gp_user`
--
ALTER TABLE `gp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`cat_sub_id`) REFERENCES `menus` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
