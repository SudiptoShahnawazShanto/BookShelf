-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 08:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'Sudipto', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(32) NOT NULL,
  `cart` int(32) NOT NULL,
  `user` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `cart`, `user`) VALUES
(2, 23, 2),
(3, 3, 2),
(4, 5, 2),
(5, 10, 2),
(6, 13, 2),
(7, 20, 2),
(8, 23, 2),
(74, 26, 4),
(75, 1, 4),
(76, 25, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `addr` varchar(32) NOT NULL,
  `payment` varchar(32) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `pass`, `email`, `addr`, `payment`, `phone`) VALUES
(1, 'Sudipto', '123456', 'sudipto@gmail.com', 'Khulna', '', '01902028904'),
(2, 'Siddik', '123456', 'siddik@gmail.com', 'Jahangirnagar University', '', '01734565676'),
(3, 'Elma', '123456', 'elma@gmail.com', 'Jahangirnagar University', '', '01454565977'),
(4, 'Naiar', '12345', 'naiar@gmail.com', 'Dhaka', '', '01555555555'),
(5, 'Customer', '1234', 'customer@gmail.com', 'Dhaka', '', '01584102020'),
(7, 'Sudipto1', '123456', 'shanto@gmail.com', 'Savar', '', '01548787878');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(32) NOT NULL,
  `bkash` int(32) NOT NULL,
  `bpin` varchar(32) NOT NULL,
  `rocket` int(32) NOT NULL,
  `rpin` varchar(32) NOT NULL,
  `nagad` int(32) NOT NULL,
  `npin` varchar(32) NOT NULL,
  `c_name` varchar(32) NOT NULL,
  `c_addr` varchar(32) NOT NULL,
  `c_num` int(32) NOT NULL,
  `user` int(11) NOT NULL,
  `uname` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `bkash`, `bpin`, `rocket`, `rpin`, `nagad`, `npin`, `c_name`, `c_addr`, `c_num`, `user`, `uname`) VALUES
(1, 0, '0', 0, '0', 176543219, '459872', '', '', 0, 2, 'Siddik'),
(2, 0, '0', 1658963852, '258147', 0, '0', '', '', 0, 4, 'Naiar'),
(8, 1111111111, '14515151', 0, '0', 0, '0', '', '', 0, 5, 'Customer'),
(9, 0, '0', 0, '0', 1555555555, '1581651651', '', '', 0, 5, 'Customer'),
(10, 0, '0', 1658487878, '1564984615', 0, '0', '', '', 0, 5, 'Customer'),
(11, 0, '0', 0, '0', 0, '0', '1234', 'Savar', 1457568989, 4, 'Naiar'),
(12, 1111111111, '1515163', 0, '0', 0, '0', '', '', 0, 4, 'Naiar'),
(13, 1454878787, 'ASD11D48DSSSUT', 0, '', 0, '', '', '', 0, 4, 'Naiar'),
(14, 1521240405, 'TXGDFRT1651', 0, '', 0, '', '', '', 0, 7, 'Sudipto1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `review` varchar(500) NOT NULL,
  `price` int(10) NOT NULL DEFAULT 200,
  `img` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `genre`, `rating`, `review`, `price`, `img`, `author`) VALUES
(1, 'Abarodh Basini', 'Novel', 4, 'Oborodh Bashini By Begum Rokeya is the most popular novel by Begum Rokeya. Oborodh Bashini novel was a worldwide famous book by Begum Rokeya. Begum Rokeya was a Bangladeshi popular feminist writer who writes for the woman. Begum Rokeya was a Bengali writer, educationist, social activist, and advocate of women’s rights.', 200, '1', 'Begum Rokeya'),
(2, 'In Blissful Hell', 'Novel', 4.8, 'A lower middle class family, the head of the family is the only earner among them. He has 4 children and two wives. A friend of his is a part of his family too. The book portrayed by Humayun\'s perspective, the eldest son of the house. The whole story is about Rabeya, a mentally unbalanced girl can be called an autistic girl. Taking advantage of her condition, someone gave her the happiness of motherhood but in time Rabeya also died. His step brother killed that traitor and got revenge and also g', 250, '2', 'Humayun Ahmed'),
(3, 'Shonkhonil Karagar', 'Novel', 4.5, 'Shonkhonil Karagar is a 1973 novel in Bengali by Bangladeshi author Humayun Ahmed. It is also a book that was made into a popular movie in Bangladesh. The book was made into the 1992 film with the same title, starring Zafar Iqbal, Champa, Doli Johur, Abul Hayat, Suborna Mustafa and Asaduzzaman Noor. It was filmed in 1992 in Dhaka, Bangladesh.', 300, '3', 'Humayun Ahmed'),
(4, 'Shonku Shomogro', 'Science Fiction', 4.6, 'Professor Shonku is a reputed scientist who disappeared 15 years ago. Some say that he has died while attempting a serious scientific experiment. Others say that he has gone into hiding, continuing his scientific researches and experiments at some unknown corner of the Earth and will reappear in due time. ', 370, '4', 'Satyajit Ray'),
(5, 'Bandits of Bombay', 'Fiction', 4.2, 'Feluda, Topshe and Jatayu are in Bombay where Jatayu\'s latest book is being filmed under the title Jet Bahadur. Soon after Jatayu hands over a package to a man in a red shirt, a man is murdered in the elevator of the high-rise where the producer of the film lives. Feluda and his companions find themselves in the midst of one of their most thrilling adventures ever, with a hair-raising climax aboard a train during location shooting.', 210, '5', 'Satyajit Ray'),
(6, 'My Years with Apu', 'Biography', 4.4, 'The Indian film-maker Satyajit Ray tells the story behind the making of his three films, the \"Apu\" trilogy. Completed shortly before his death, the memoir covers the key aspects of his career: his decision to give up a lucrative job in advertising in order to make his first film, early setbacks, a chronic shortage of funds, the guidance and support of directors such as Jean Renoir, his solutions to problems, and the acclaim for his films at home and abroad.', 290, '6', 'Satyajit Ray'),
(7, 'Gitanjali', 'Poetry', 4.4, 'Nobel laureate Rabindranath Tagore was one of the most important writers in 20th-century Indian literature. Among his expansive and impressive body of work, \"Gitanjali\" is regarded as one of his greatest achievements, and has been a perennial bestseller since it was first published in 1910.', 310, '7', 'Rabindranath Tagore'),
(8, 'The Home and the World', 'Fiction', 3.8, 'Set on a Bengali noble\'s estate in 1908, this is both a love story and a novel of political awakening. The central character, Bimala, is torn between the duties owed to her husband, Nikhil, and the demands made on her by the radical leader, Sandip. Her attempts to resolve the irreconciliable pressures of the home and world reflect the conflict in India itself, and the tragic outcome foreshadows the unrest that accompanied Partition in 1947.', 150, '8', 'Rabindranath Tagore'),
(9, 'Chokher Bali', 'Classic', 4, 'One of the most famous novels of Tagore and a timeless classic of Bengali literature. First published as a serial, a novel on love, family and sexuality in Bengal society.', 190, '9', 'Rabindranath Tagore'),
(10, 'Ami Topu', 'Fiction', 4.4, 'His full name is Ariful Islam Topu. When Topu reads in class five, he has died in a road accident. A heart touching story of a happy-go-lucky family facing an incident that turns their life up-side-down overnight. This story is narrated by the youngest son of the family, Topu, who seems to get the most significant share of the sufferings. The story is about the young talented teenager going through a delicate phase and facing horrible experiences at home after his mother loses her sanity.', 200, '10', 'Muhammed Zafar Iqbal'),
(11, 'Tukunjil', 'Science Fiction', 4.1, 'Bilu lives in a village with his parents. Their family is impoverished. Bill’s father has a problem. Bilu’s father talked with tree and fish.  This reason everyone thinks he is mad.  This reason Bilu’s sister cannot study. All-time Billu is sad because of his father. Everybody wants her marriage. Bilu is a brilliant student. He wins the first position in his district. His best friend name Dulal. Dulal and he always reading many stories. One day bill’s younger aunt Lili come to their house. Lili ', 300, '11', 'Muhammed Zafar Iqbal'),
(12, 'Keplar 22B', 'Science Fiction', 4.3, 'This is a story of Future Human life. Man makes bio-robot. In the future world fulfill this type of robot. It’s dangerous for human life. To send people to another planet. Seven-man and women are select forms of this plan. These seven people are Ihhita, Suha, Turan, Tor, Niha, Clod, and Nut. Ihhita is the leader of this group.', 320, '12', 'Muhammed Zafar Iqbal'),
(13, 'To Kill a Mockingbird', 'Southern Gothic', 4.3, 'The story, told by the six-year-old Jean Louise Finch, takes place during three years (1933–35) of the Great Depression in the fictional town of Maycomb, Alabama, the seat of Maycomb County. Nicknamed Scout, she lives with her older brother Jeremy, nicknamed Jem, and their widowed father Atticus, a middle-aged lawyer. Jem and Scout befriend a boy named Dill, who visits Maycomb to stay with his aunt each summer.', 280, '13', 'Harper Lee'),
(14, 'One Hundred Years of Solitude', 'Classic', 4.1, 'The brilliant, bestselling, landmark novel that tells the story of the Buendia family, and chronicles the irreconcilable conflict between the desire for solitude and the need for love—in rich, imaginative prose that has come to define an entire genre known as \"magical realism.\"', 170, '14', 'Gabriel García Márquez'),
(15, 'The Great Gatsby', 'Classic', 4, 'This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story is of the fabulously wealthy Jay Gatsby and his new love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted \"gin was the national drink and sex the national obsession,\" it is an exquisitely crafted tale of America in the 1920s.', 250, '15', 'F. Scott Fitzgerald'),
(16, 'The Color Purple', 'Fiction', 4.2, 'A powerful cultural touchstone of modern American literature, The Color Purple depicts the lives of African American women in early twentieth-century rural Georgia. Separated as girls, sisters Celie and Nettie sustain their loyalty to and hope in each other across time, distance and silence.', 350, '16', 'Alice Walker'),
(17, 'Beloved', 'Fiction', 3.9, 'Sethe was born a slave and escaped to Ohio, but eighteen years later she is still not free. She has borne the unthinkable and not gone mad, yet she is still held captive by memories of Sweet Home, the beautiful farm where so many hideous things happened. Meanwhile Sethe’s house has long been troubled by the angry, destructive ghost of her baby, who died nameless and whose tombstone is engraved with a single word: Beloved.', 160, '17', 'Toni Morrison'),
(18, 'Anna Karenina', 'Classic', 4.1, 'Acclaimed by many as the world\'s greatest novel, Anna Karenina provides a vast panorama of contemporary life in Russia and of humanity in general. In it Tolstoy uses his intense imaginative insight to create some of the most memorable characters in all of literature. Anna is a sophisticated woman who abandons her empty existence as the wife of Karenin and turns to Count Vronsky to fulfil her passionate nature - with tragic consequences. Levin is a reflection of Tolstoy himself, often expressing ', 260, '18', 'Leo Tolstoy'),
(19, 'Deyal', 'Historical', 4, 'Deyal is a 2013 political/historical novel, based on the socio-political crisis in the aftermath of the war of independence of Bangladesh. It was the last novel of the writer and was published one year after his death.[1][2] The publication of the book was delayed by a High Court verdict.', 270, '19', 'Humayun Ahmed'),
(20, 'Hotel Graver Inn', 'Autobiography', 4.1, 'Hotel Graver Inn by Humayun Ahmed is a collection of thirteen short stories. Humayun Ahmed was the United States for his Ph.D. He writes some event for his foreign country. He wrote some autobiography when he was staying in the United States. He stays six years to this country. This six-year visits many places in this country, so it was also a travel story.', 300, '20', 'Humayun Ahmed'),
(21, 'Parapar', 'Novel', 4.7, 'Himu have to go to Yakub Ali. He called in him. The man is aristocratic rich. He had to drill more to visit him. At last, He could meet him. He thought that he was keeping his foot in the cabin of a hospital. Yakub Ali has called for Himu. Himu can do that work well. As Himu related book, the reader my Power, precisely in that way. He also lugs this story in his way. He has also taken this story in his assimilation.', 350, '21', 'Humayun Ahmed'),
(22, 'Agnibeena', 'Poem', 4.5, 'Agnibeena contains a preface where Nazrul dedicated the book to Barindra Kumar Ghosh and 12 poems. The most famous poem of this book is \"Bidrohi\"', 320, '22', 'Kazi Nazrul Islam'),
(23, 'Sanchita', 'Poem', 4.9, 'Sanchita is one of the most popular poets of Bengali literature by Kazi Nazrul Islam. There are sixty-nine poems in this book. Everybody love poems, especially Bengali poem. Sanchita was written by our national poet Kazi Nazrul Islam.', 370, '23', 'Kazi Nazrul Islam'),
(24, 'Mrityukshuda', 'Novel', 4.7, 'It is one of only three novels written by him. The author saw the Bolshevik revolution in Russia, with its unapologetic enthusiasm for science and rationalism, as well as the possibilities it seemed to open up for normal, everyday people to create social justice and development for themselves, as profoundly attractive.', 250, '24', 'Kazi Nazrul Islam'),
(25, 'Shiulimala', 'Fiction', 4.2, 'This book contains four stories. The stories contained in the volume are: Padmagokhra, Shiulimala, Ognigiri, Jiner Badsha.[1] These stories are erotic.[2] Here we find romantic Nazrul. However, Nazrul made great contributions in Bengali. ', 250, '25', 'Kazi Nazrul Islam'),
(26, 'Adventures of Huckleberry Finn', 'Novel', 3.8, 'A nineteenth-century boy from a Mississippi River town recounts his adventures as he travels down the river with a runaway slave, encountering a family involved in a feud, two scoundrels pretending to be royalty, and Tom Sawyer\'s aunt who mistakes him for Tom.', 240, '26', 'Mark Twain'),
(27, 'Sultana\'s Dream', 'Utopian Fiction', 4.2, 'It depicts a feminist utopia (called Ladyland) in which women run everything and men are secluded, in a mirror-image of the traditional practice of purdah. The women are aided by science fiction-esque \"electrical\" technology which enables laborless farming and flying cars.', 340, '27', 'Begum Rokeya'),
(28, 'Jochona O Jononir Golpo', 'Fiction', 4.4, 'The novel is based on the Liberation War of Bangladesh. In the novel, by means of an engrossing fictional story which skillfully incorporates various historical figures and many true incidents as well as the author\'s own personal experiences.', 310, '28', 'Humayun Ahmed'),
(29, 'Gora', 'Novel', 4.4, 'Gora (Bengali: গোরা) is a novel by Rabindranath Tagore, set in Calcutta (now Kolkata), in the 1880s during the British Raj. It is the fifth in order of writing and the longest of Tagore’s twelve novels. It is rich in philosophical debate on politics and religion.', 250, '29', 'Rabindranath Tagore'),
(30, 'Stray Birds', 'Poem', 4.3, '\"Stray Birds\" contains ideas on nature, man, and his environment as may be entertained by a man sitting by a window where the stray birds of summer sing and fly away. These short, sometimes merely one-line poems are often just an image or the distillation of a thought, but they stay in the mind and do not fly away as easily as the birds.', 200, '30', 'Rabindranath Tagore'),
(31, 'Aguner Poroshmoni', 'Novel', 4.5, 'Aguner Poroshmoni is one of the best Bangla novels of Humayun Ahmed. The Bengali book is all about our Liberation war in 1971.', 360, '31', 'Humayun Ahmed'),
(32, 'Sapiens', 'Historical', 4.8, 'In Sapiens, Dr Yuval Noah Harari spans the whole of human history, from the very first humans to walk the earth to the radical – and sometimes devastating – breakthroughs of the Cognitive, Agricultural and Scientific Revolutions.', 180, '32', 'Yuval Noah Harari'),
(33, 'Homo Deus', 'Non-fiction', 4.2, 'Yuval Noah Harari, author of the critically-acclaimed New York Times bestseller and international phenomenon Sapiens, returns with an equally original, compelling, and provocative book, turning his focus toward humanity’s future, and our quest to upgrade humans into gods.', 210, '33', 'Yuval Noah Harari'),
(34, '21 Lessons for the 21st Century', 'Non-fiction', 4.5, 'In Sapiens, he explored our past. In Homo Deus, he looked to our future. Now, one of the most innovative thinkers on the planet turns to the present to make sense of today\'s most pressing issues.', 260, '34', 'Yuval Noah Harari'),
(35, 'Animal Farm', 'Fiction', 3.5, 'A farm is taken over by its overworked, mistreated animals. With flaming idealism and stirring slogans, they set out to create a paradise of progress, justice, and equality.', 360, '35', 'George Orwell'),
(36, 'The Alchemist', 'Fantasy', 3.5, 'Paulo Coelho\'s enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago, who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids.', 350, '36', 'Paulo Coelho'),
(37, 'Sophie\'s World', 'Philosophy', 4.5, 'One day fourteen-year-old Sophie Amundsen comes home from school to find in her mailbox two notes, with one question on each: \"Who are you?\" and \"Where does the world come from?\"', 340, '37', 'Jostein Gaarder'),
(38, 'Shobnom', 'Romantic', 4.5, 'Shabnam means dewdrops, hyacinth flowers in the imagination of the author. Shabnam is the dream girl of eternal love, just as the hyacinth blooms with all the night dreams.', 190, '38', 'Syed Mujtaba Ali'),
(39, 'The Da Vinci Code', 'Thriller', 4, 'While in Paris, Harvard symbologist Robert Langdon is awakened by a phone call in the dead of the night. The elderly curator of the Louvre has been murdered inside the museum, his body covered in baffling symbols.', 200, '39', 'Dan Brown'),
(40, 'The Lost Symbol', 'Thriller', 3.5, 'As the story opens, Harvard symbologist Robert Langdon is summoned unexpectedly to deliver an evening lecture in the U.S. Capitol Building. Within minutes of his arrival, however, the night takes a bizarre turn.', 300, '40', 'Dan Brown'),
(41, 'Inferno', 'Thriller', 3, 'Harvard professor of symbology Robert Langdon awakens in an Italian hospital, disoriented and with no recollection of the past thirty-six hours, including the origin of the macabre object hidden in his belongings.', 320, '41', 'Dan Brown'),
(42, 'Prothom Alo', 'Historical', 4.2, 'To overcome life frights, one has to stand tall and strong, metally and physically. Life can be cruel, only if one let it to be that way. It has great language inside', 210, '42', 'Sunil Gangopadhyay'),
(43, 'Kalpurush', 'Novel', 3.8, 'Although the series is named after Animesh, Orc is seen as the main character in this story. Orc, who grew up in a slum, did not have much of a mind to study, but in his blood flowed Animesh\'s stubbornness and Madhavilata\'s tolerance, selflessness and courage.', 270, '43', 'Samares Mazumdar'),
(44, 'Nineteen Eighty Four', 'Fiction', 4.9, 'Among the seminal texts of the 20th century, Nineteen Eighty-Four is a rare work that grows more haunting as its futuristic purgatory becomes more real. ', 280, '44', 'George Orwell'),
(45, 'Gorvodharini', 'Novel', 4.6, 'Gorvodharini is the story of four young men in their twenties. They got to know each other while going to college. These four from different strata of society are just one in thinking of this revolution. Like everyone else, they wanted to do something new.', 310, '45', 'Samares Mazumdar'),
(46, 'Eleven Minutes', 'Romantic', 3, 'Eleven Minutes is the story of Maria, a young girl from a Brazilian village, whose first innocent brushes with love leave her heartbroken.', 200, '46', 'Paulo Coelho'),
(47, 'Kafka on the Shore', 'Novel', 4, 'There is a brutal murder, with the identity of both victim and perpetrator a riddle—yet this, along with everything else, is eventually answered, just as the entwined destinies of Kafka and Nakata are gradually revealed, with one escaping his fate entirely and the other given a fresh start on his own.', 288, '47', 'Haruki Murakami');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user`) REFERENCES `customer` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
