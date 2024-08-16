

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `marmara` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `guneydogu` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `karadeniz` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `icanadolu` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `doguanadolu` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `ege` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `akdeniz` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `content` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `marmara` (`id`, `title`, `image`, `content`) VALUES
('1', 'Galata Tower', 'galata.png','Galata Tower, located in the Galata district of Istanbul, Turkey, is a historic landmark rising approximately 67 meters. Built in 1348 by the Genoese during their colonial period, the tower features Romanesque architecture. Throughout its history, it has served various purposes, including as a lookout tower, a dungeon, and a military observation point. Today, it is a popular tourist attraction offering panoramic views of Istanbul from its observation deck. The tower is also home to a museum, a restaurant, and a café. A symbol of Istanbul, Galata Tower is associated with the legend of Hezarfen Ahmet Çelebi, who is said to have flown from the tower to the Asian side of the city in the 17th century.'),
('2', 'Hagia Sophia', 'ayasofya.jpg','Hagia Sophia, also known as Ayasofya, is a monumental structure in Istanbul with a rich and complex history. Originally built as a Christian cathedral in 537 AD during the reign of Byzantine Emperor Justinian I, it served as the principal church of the Eastern Orthodox Church for almost a millennium. Its name, meaning "Holy Wisdom" in Greek, reflects its profound religious significance. In 1453, following the Ottoman conquest of Constantinople, it was converted into a mosque by Sultan Mehmed II, incorporating Islamic architectural features and calligraphy, and serving as a mosque for nearly 500 years. In 1935, under the secular reforms of Mustafa Kemal Atatürk, it was turned into a museum, allowing people from around the world to admire its architectural and historical splendor. In 2020, it was re-designated as a mosque, while remaining open to visitors. Architecturally, Hagia Sophia is renowned for its massive dome, intricate mosaics, and vast, awe-inspiring interior, which combines elements of both Christian and Islamic art, making it a symbol of the diverse cultural heritage of Istanbul.'),
('3','Prince Islands','adalar.jpg', 'The Prince Islands are a group of islands located southeast of the Istanbul Strait, forming part of the Adalar district of Istanbul. These islands include Büyükada, Heybeliada, Burgazada, Kınalıada, and several smaller islets. The names of the islands are given according to their characteristic features. For example, Büyükada means "Big Island" due to its size. The islands serve as a popular escape for those seeking to get away from the crowded and noisy city life of Istanbul. Renowned for their historical and natural beauty, these islands are a frequent destination for both locals and tourists alike. With no car traffic, transportation on the islands is mainly by horse-drawn carriages, bicycles, or on foot, adding to the charm and tranquility of the area.'),
('4','Koza Han', 'kozahan.jpg','Koza Han is a historic caravanserai located in Bursa, Turkey. Built during the Ottoman period, Koza Han served as a significant center for silk trade. The han s architecture reflects traditional Ottoman design, with its stone walls, arched entrances, and inner courtyard. Today, Koza Han houses various shops and boutiques selling a wide range of goods, from traditional handicrafts to modern souvenirs. Visitors can explore the hans narrow corridors a nd vibrant atmosphere, immersing themselves in Bursas rich cultural heritage while experiencing the hustle and bustle of its historic marketplace.' ),
('5', 'Çanakkale Martyrs Monument and War Museum', 'canakkale.jpeg','
The Çanakkale Martyrs'' Memorial, also known as the Çanakkale Martyrs'' Monument, is a significant historical landmark located in Turkey. Situated on the Gallipoli Peninsula, it commemorates the heroic Turkish soldiers who fought and sacrificed their lives during the Gallipoli Campaign of World War I. The memorial overlooks the Dardanelles Strait, serving as a poignant reminder of the fierce battles that took place on this strategic battlefield. Designed by architect Doğan Erginbaş, the monument features four towering stone columns symbolizing the four main battles of the Gallipoli Campaign. At the base of the monument, there is a relief depicting the various roles and struggles of the Turkish soldiers during the conflict. The Çanakkale Martyrs Memorial stands as a solemn tribute to the bravery and resilience of those who defended their homeland against formidable odds.' ),
('6','Tekirdağ Archeology and Ethnography Museum','tek.jpeg','The Tekirdağ Archaeology and Ethnography Museum is a cultural institution located in Tekirdağ, Turkey, showcasing the rich history and heritage of the region. Housed in a historic building that once served as a courthouse during the Ottoman era, the museum offers visitors a fascinating journey through time. Its archaeological section displays artifacts dating back to ancient civilizations that once flourished in the area, including items from the Thracians, Romans, and Byzantines. These artifacts provide insights into the daily life, customs, and beliefs of past societies that inhabited the Tekirdağ region. Additionally, the ethnography section of the museum features exhibits highlighting the traditional culture, art, and craftsmanship of the local communities. From pottery and textiles to traditional costumes and folkloric objects, the museums collections offer a comprehensive overview of Tekirdağs cultural heritage. With its diverse array of exhibits, the Tekirdağ Archaeology and Ethnography Museum serves as a valuable resource for both locals and visitors interested in exploring the regions rich cultural tapestry.');

INSERT INTO `ege` (`id`, `title`, `image`, `content`) VALUES
('1','Bodrum Castle','bodrumkalesi.jpeg','Bodrum Castle, also known as the Castle of St. Peter, stands as a testament to the medieval era''s architectural prowess and strategic importance. Located in the Turkish port city of Bodrum, this imposing fortress overlooks the azure waters of the Aegean Sea. Constructed by the Knights Hospitaller in the 15th century, the castle served as a stronghold during the Crusades, safeguarding against maritime invasions and providing refuge for Christian pilgrims en route to the Holy Land.'),
('2','Ancient City of Ephesus','ephesus.jpeg','The Ancient City of Ephesus, situated on the western coast of present-day Turkey, is a captivating archaeological site that offers a glimpse into the rich tapestry of ancient civilization. Originally founded by Greek colonists in the 10th century BC, Ephesus flourished as a prominent center of trade, culture, and spirituality throughout its millennia-long history. Renowned for its grandeur and sophistication, the city boasted magnificent structures such as the Temple of Artemis, one of the Seven Wonders of the Ancient World.'),
('3','Saklikent National Park','saklikent.jpeg','Saklikent National Park, nestled in the rugged Taurus Mountains of southwestern Turkey, beckons adventurers with its breathtaking natural beauty and abundance of outdoor activities. Spread across an expanse of over 17,000 hectares, this pristine wilderness encompasses diverse ecosystems, from lush forests and cascading waterfalls to rugged canyons and crystalline rivers. The park''s crown jewel is Saklikent Canyon, one of the deepest and longest canyons in the country, carved over millennia by the rushing waters of the Esen River. As visitors venture into the canyon''s depths, they are greeted by towering cliffs that soar hundreds of meters high, offering a sense of awe and wonder at the sheer power of nature.'),
('4','Lover''s Leap Waterfall','loversleap.jpeg','Lovers Waterfall, or "Aşıklar Şelalesi" in Turkish, is a picturesque natural attraction located near the town of İzmir in western Turkey. Nestled within a serene forested area, this enchanting waterfall cascades gently over a series of rock formations into a tranquil pool below, creating a soothing and romantic ambiance. The lush greenery surrounding the waterfall, coupled with the melodious sound of flowing water, makes it a popular spot for couples and nature lovers seeking a peaceful retreat. Accessible via a short and scenic hike, Lovers Waterfall offers visitors an idyllic escape from the hustle and bustle of everyday life, inviting them to immerse themselves in the beauty and tranquility of the natural world.'),
('5','Dead Sea','deadsea.jpeg','
The Dead Sea, a unique and iconic natural wonder, lies at the lowest point on Earth''s surface, bordered by Jordan to the east and Israel and Palestine to the west. Renowned for its hyper-saline waters, the Dead Sea is nearly ten times saltier than the ocean, making it impossible for most life forms to thrive but providing an unparalleled buoyant experience for swimmers. Its mineral-rich mud and waters have been cherished for their therapeutic properties since ancient times, attracting visitors seeking healing and relaxation. The surrounding landscape, characterized by dramatic desert vistas and historical landmarks, enhances the mystical allure of this extraordinary body of water, making it a must-visit destination for travelers and wellness enthusiasts alike.'),
('6','The House of the Virgin Mary','virgin.jpg','The House of the Virgin Mary, located on the slopes of Mount Koressos near Ephesus in Turkey, is a revered pilgrimage site for both Christians and Muslims. Believed to be the final residence of Mary, the mother of Jesus, this modest stone house is venerated for its historical and spiritual significance. According to tradition, Mary was brought to Ephesus by the Apostle John, and it is here that she spent her last years. The site was rediscovered in the 19th century following the visions of a German nun, Anne Catherine Emmerich, which guided researchers to its location. Today, the House of the Virgin Mary attracts thousands of visitors annually, who come to pay their respects, seek solace, and experience the serene and sacred atmosphere that pervades this ancient sanctuary.');


INSERT INTO `karadeniz` (`id`, `title`, `image`, `content`) VALUES
('1','Sumela Monastery','sumela.jpg','The Sumela Monastery, perched dramatically on a steep cliffside in the Pontic Mountains of northeastern Turkey, is a marvel of Byzantine architecture and religious devotion. Founded in the 4th century by Greek Orthodox monks, this monastic complex is dedicated to the Virgin Mary and is renowned for its stunning frescoes, intricate chapels, and breathtaking views of the surrounding Altındere Valley. The monastery''s remote and lofty location, approximately 1,200 meters above sea level, provided both a sanctuary and a strategic vantage point throughout its history. Accessible via a winding path through dense forests, Sumela offers visitors a journey through both natural beauty and historical splendor. Today, it stands as a testament to the enduring legacy of the Byzantine Empire and the spiritual heritage of the region, attracting pilgrims, historians, and travelers who seek to explore its rich cultural and religious tapestry.'),
('2','Rize Castle','rizecastle.jpeg','Rize Castle, an enduring symbol of the rich history of Turkey''s Black Sea region, stands proudly overlooking the city of Rize. Built during the Byzantine period and later expanded by the Genoese and Ottomans, this fortress boasts a strategic hilltop position that offers commanding views of the lush, verdant landscape and the sparkling Black Sea below. The castle is divided into an upper and lower section, with the upper citadel, known as "Yukarı Kale," being the most well-preserved. Visitors can explore the remnants of ancient walls, towers, and gates that tell tales of the region''s past conflicts and conquests. Surrounded by tea gardens and dense forests, Rize Castle not only provides a window into the area''s storied past but also serves as a tranquil spot for locals and tourists to appreciate the natural beauty and cultural heritage of Rize.'),
('3','Guzelcehisar Beach','guzelcehisar.jpeg','Güzelcehisar Beach, located along the Black Sea coast in Turkey''s Bartın Province, is a hidden gem known for its stunning natural beauty and unique geological formations. This pristine beach is famed for its striking basalt columns, which were formed by ancient volcanic activity and stand as a testament to the Earth''s dynamic geological history. Stretching along a picturesque shoreline, Güzelcehisar Beach offers visitors golden sands, crystal-clear waters, and a serene environment perfect for relaxation and exploration. The backdrop of lush green hills and the tranquil atmosphere make it an ideal destination for nature lovers and those seeking a peaceful retreat. In addition to its scenic allure, the beach is a growing spot for eco-tourism and outdoor activities, such as hiking and photography, providing a perfect blend of adventure and serenity.'),
('4','Bandırma Ferry Museum','bandirma.jpg','The Bandırma Ferry Museum, located in the coastal city of Bandırma in Turkey, is a significant cultural and historical landmark dedicated to commemorating the pivotal role of the Bandırma Ferry in Turkish history. This museum is housed within a meticulously restored replica of the original ferry, which famously transported Mustafa Kemal Atatürk from Istanbul to Samsun on May 19, 1919, marking the beginning of the Turkish War of Independence. Visitors to the museum can explore a rich collection of exhibits that include historical photographs, documents, and personal belongings of Atatürk and his companions, providing deep insights into this crucial period. The museum not only serves as a tribute to the founding of the Turkish Republic but also offers a captivating educational experience for all ages, highlighting the enduring legacy of Atatürk''s journey and the nation''s struggle for independence.'),
('5','Yedigoller National Park','yedigoller.jpeg','Yedigöller National Park, nestled in the Bolu province of northwestern Turkey, is a breathtaking haven of natural beauty and biodiversity. Established in 1965, the park is named after its most striking feature: seven serene lakes that were formed by landslides and are connected by streams and waterfalls. These lakes—Büyükgöl, Küçükgöl, Deringöl, Seringöl, Nazlıgöl, Sazlıgöl, and İncegöl—each offer unique landscapes, from dense forests and rich wildlife to tranquil waters reflecting the changing colors of the seasons. The park is a popular destination for outdoor enthusiasts, offering activities such as hiking, camping, and birdwatching. Its lush greenery, vibrant foliage in autumn, and snow-covered vistas in winter create a picturesque setting year-round. Yedigöller National Park is not just a refuge for nature lovers but also a vital conservation area, protecting diverse plant species and providing a sanctuary for wildlife, including deer, boars, and numerous bird species. The park''s tranquil beauty and natural diversity make it a must-visit destination for those seeking an immersive experience in Turkey''s stunning landscapes.'),
('6','Kastamonu Archaeological Museum','kas.jpeg','The Kastamonu Archaeological Museum, located in the historic city of Kastamonu in northern Turkey, is a treasure trove of artifacts that span the region''s rich and varied history. Housed in a charming building that was originally a courthouse constructed in the early 20th century, the museum provides a comprehensive journey through time, showcasing items from the Paleolithic era to the Ottoman period. Visitors can explore an impressive collection of artifacts, including ancient coins, pottery, inscriptions, and architectural fragments that highlight the cultural and historical evolution of Kastamonu and its surroundings.');

INSERT INTO `akdeniz` (`id`, `title`, `image`, `content`) VALUES
('1','Side Amphitheatre','side.jpeg','The Side Amphitheatre, located in the ancient city of Side on Turkey''s southern Mediterranean coast, is a spectacular example of Roman engineering and architectural prowess. Built in the 2nd century AD, this well-preserved amphitheater could originally accommodate around 15,000 spectators, making it one of the largest in the region. Its grand structure, with a semi-circular seating arrangement, was designed to host a variety of public events, including gladiator fights, theatrical performances, and athletic competitions.'),
('2','The Land of Legends Theme Park','landof.jpeg','The Land of Legends Theme Park, situated in Belek on the Turkish Riviera, offers an immersive and exhilarating experience for visitors of all ages. Spanning over 800,000 square meters, this sprawling entertainment complex combines thrilling rides, immersive attractions, and luxurious accommodations to create a one-of-a-kind destination. The park features a variety of themed zones, including Adventure Land, Water Park, and the Kingdom, each offering a unique blend of adrenaline-pumping adventures and family-friendly entertainment.'),
('3','Kleopatra Beach','kleopatra.jpg','
Kleopatra Beach, named after the legendary Egyptian queen Cleopatra, is one of the most iconic and picturesque beaches on Turkey''s southern coast. Located in the resort town of Alanya, along the turquoise waters of the Mediterranean Sea, Kleopatra Beach boasts pristine golden sands, crystal-clear waters, and stunning views of the surrounding coastline and rocky cliffs.'),
('4','Lower Duden Waterfalls','duden.jpeg','The Lower Duden Waterfalls, located just a few kilometers from the city center of Antalya in southern Turkey, are a mesmerizing natural wonder that captivates visitors with their sheer beauty and power. Carved by the Duden River as it cascades over cliffs into the Mediterranean Sea, these waterfalls create a spectacular display of rushing water and mist, set against a backdrop of lush greenery and rocky cliffs.'),
('5','Cennet and Cehennem Cave','cennet.jpeg','Cennet and Cehennem Caves, located near the town of Narlıkuyu in the Mersin Province of southern Turkey, are a fascinating geological marvel steeped in myth and legend. Translating to '"Heaven" 'and "Hell" in Turkish, these two interconnected caves are actually part of a complex karst system formed over millions of years.'),
('6','Old Bazaar','old.jpeg','The Old Bazaar, situated in the heart of the historic district of Antalya along Turkey''s Mediterranean coast, is a captivating blend of tradition, culture, and commerce. Dating back centuries, this bustling marketplace embodies the spirit of antiquity, with its labyrinthine streets, Ottoman-era architecture, and vibrant array of shops and stalls. Here, visitors can wander through narrow alleyways lined with colorful textiles, intricate carpets, handmade crafts, and an abundance of spices, herbs, and local delicacies. The aroma of freshly brewed Turkish coffee and the sounds of bargaining fill the air, creating an immersive sensory experience that transports visitors to another time and place. Beyond its role as a center for commerce, the Old Bazaar of Akdeniz serves as a cultural hub where locals and tourists alike come together to celebrate traditions, exchange stories, and savor the rich tapestry of Anatolian heritage. Whether exploring its historical landmarks, sampling its culinary delights, or simply soaking in its vibrant ambiance, a visit to the Old Bazaar of Akdeniz is an essential part of any journey through the enchanting city of Antalya.');

INSERT INTO `icanadolu` (`id`, `title`, `image`, `content`) VALUES
('1','Anıtkabir','anıtkabir.jpg','Anıtkabir, located in Ankara, Turkey, stands as a monumental tribute to Mustafa Kemal Atatürk, the visionary leader and founder of the Turkish Republic. Constructed between 1944 and 1953, Anıtkabir not only serves as Atatürk''s final resting place but also symbolizes the enduring legacy of his principles and ideals. Its grandeur is evident in its architectural design, featuring imposing structures, intricate sculptures, and meticulously landscaped gardens. Visitors to Anıtkabir are immersed in a solemn atmosphere, where they can pay their respects to Atatürk while reflecting on the profound impact of his leadership on modern Turkey. As a national symbol of unity and pride, Anıtkabir continues to inspire reverence and admiration among Turks and visitors alike, serving as a timeless reminder of Atatürk''s contributions to the nation''s history and identity.'),
('2','Cappadocia','kapadokya.jpg','Cappadocia, a region in central Turkey, is renowned for its otherworldly landscapes, ancient history, and unique cultural heritage. What sets Cappadocia apart are its surreal rock formations, known as fairy chimneys, which have been sculpted by centuries of wind and water erosion. These towering rock formations dot the landscape, creating a mesmerizing and almost magical environment that has captivated travelers for generations.'),
('3','Anatolian Civilizations Museum','anatolian.jpg','The Anatolian Civilizations Museum, located in Ankara, Turkey, is a treasure trove of artifacts that trace the rich history of Anatolia from prehistoric times to the Byzantine era. Housed in two historic buildings, the museum showcases an extensive collection of archaeological finds that provide insight into the diverse cultures that have thrived in the region over millennia.'),
('4','Ataturk Forest Farm','ataturkforest.jpg','The Atatürk Forest Farm and Zoo, located in Ankara, Turkey, is a sprawling green space that serves as both a recreational area and an educational center. Established by Mustafa Kemal Atatürk, the founder of the Turkish Republic, the forest farm is a testament to his commitment to agricultural development, environmental conservation, and education.Covering an extensive area of '),
('5','Ihlara Valley','ıhlara.jpg','Ihlara Valley, located in the heart of Cappadocia in central Turkey, is a breathtaking natural wonder renowned for its stunning landscapes, rich history, and unique cultural heritage. Carved by the Melendiz River over millions of years, the valley stretches for approximately 14 kilometers (8.7 miles) between the towns of Ihlara and Selime.'),
('6','Salt Lake','salt.jpg','The Salt Lake, also known as Tuz Gölü in Turkish, is one of Turkey''s most iconic natural wonders, located in the central Anatolian region, approximately 150 kilometers (93 miles) southeast of Ankara. Spanning an area of over 1,500 square kilometers (580 square miles), the Salt Lake is the second-largest lake in Turkey and one of the largest hypersaline lakes in the world.');

INSERT INTO `guneydogu` (`id`, `title`, `image`, `content`) VALUES
('1','Mount Nemrut','nemrut.jpeg','Mount Nemrut, located in southeastern Turkey near the city of Adıyaman, is home to one of the most impressive archaeological sites in the country. At its summit, which reaches an elevation of 2,134 meters (7,001 feet), stands the enigmatic Mount Nemrut National Park, a UNESCO World Heritage Site.'),
('2','Malabadi Bridge','malabadi.jpeg','The Malabadi Bridge, also known as the Kasrik Bridge, is a historic stone bridge located in southeastern Turkey, near the town of Silvan in the province of Diyarbakır. Constructed during the Artuqid period in the 12th century, the bridge is renowned for its architectural significance and picturesque setting.'),
('3','Zeugma  Mosaics Museum','zeugma.jpeg','The Zeugma Mosaics Museum, located in Gaziantep, Turkey, is a world-renowned museum dedicated to preserving and showcasing the ancient mosaics unearthed at the archaeological site of Zeugma. The city of Zeugma, founded by the Greeks in the 3rd century BCE, was an important crossroads of trade and culture along the Euphrates River.'),
('4','Gaziantep Castle','antepkale.jpg','Gaziantep Castle, also known as Gaziantep Citadel or Gaziantep Kalesi in Turkish, is a historic fortress located in the heart of Gaziantep, a city in southeastern Turkey with a rich cultural heritage. Perched on a hill overlooking the city, the castle has been a dominant feature of Gaziantep''s skyline for centuries and serves as a symbol of its enduring history and resilience.'),
('5','Pool of Abraham','balikligol.jpg','The Pool of Abraham, also known as Balıklıgöl in Turkish, is a sacred site located in Şanlıurfa, a city in southeastern Turkey with a rich history and cultural significance. According to local tradition and religious beliefs, the Pool of Abraham is associated with several biblical and Quranic narratives, making it a revered pilgrimage destination for Muslims, Christians, and Jews alike.'),
('6','Adıyaman Great Mosque','adıyaman.jpg','The Ulu Cami, or Great Mosque, stands as a prominent symbol of spiritual devotion and architectural grandeur in Adıyaman, Turkey. Nestled within the heart of the city, this historic mosque serves as a testament to the rich cultural heritage and religious traditions of the region. With its elegant Ottoman design characterized by towering minarets, intricate tile work, and a majestic central dome, the Ulu Cami commands attention and reverence from both locals and visitors alike. Beyond its impressive façade, the mosque''s spacious interior provides a tranquil sanctuary for worshippers to gather in prayer and reflection. As a cherished community landmark, the Ulu Cami not only fulfills its role as a place of worship but also fosters a sense of unity and belonging among the diverse inhabitants of Adıyaman.');

INSERT INTO `doguanadolu` (`id`, `title`, `image`, `content`) VALUES
('1','Ishak Pasha Palace','ıshak.jpg','The Ishak Pasha Palace, situated near the town of Doğubayazıt in eastern Turkey, is a magnificent architectural marvel that stands as a testament to the grandeur of the Ottoman Empire. Perched atop a hill overlooking the breathtaking landscapes of the Ararat Mountains, this historic palace is renowned for its unique blend of architectural styles, including Ottoman, Persian, and Armenian influences.'),
('2','Double Minaret Madrasa','double.jpg','The Double Minaret Madrasa, also known as Çifte Minareli Medrese in Turkish, is a historic Islamic school located in the city of Erzurum in eastern Turkey. Constructed in the 13th century during the Seljuk period, the madrasa is renowned for its unique architectural design and ornate decoration.'),
('3','Van Lake','van.jpg','
Van Lake, known as Van Gölü in Turkish, is the largest lake in Turkey and one of the largest saline soda lakes in the world. Situated in the eastern part of the country, near the city of Van, the lake is surrounded by stunning natural landscapes and has a rich cultural and historical significance.'),
('4','Uzundere','uzundere.jpg','Uzundere, located in the Erzurum Province of eastern Turkey, is a picturesque district known for its stunning natural landscapes, historical landmarks, and cultural heritage. Situated at the foothills of the Palandöken Mountains, Uzundere offers visitors a tranquil retreat amidst lush forests, meandering rivers, and verdant valleys.'),
('5','Muradiye Waterfall','muradiye.jpg','Muradiye Waterfall, situated near the town of Muradiye in the Van Province of eastern Turkey, is a breathtaking natural wonder surrounded by lush forests and picturesque scenery. Fed by the waters of the Muradiye Stream, the waterfall cascades over rugged cliffs, creating a stunning spectacle that attracts visitors from far and wide.'),
('6','Abalı Ski Resort','abalı.jpg','
Abalı Ski Resort is a ski resort located near the town of Abalı in the Erzincan Province of eastern Turkey. Nestled in the picturesque landscapes of the Eastern Anatolian region, the resort offers visitors a chance to enjoy winter sports activities amidst stunning natural scenery.');




CREATE TABLE `review_marmara` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `review_karadeniz` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `review_ege` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `review_akdeniz` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `review_icanadolu` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `review_doguanadolu` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `review_guneydogu` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `users` (
  `id` varchar(20) NOT NULL PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;


INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('1','Doğa Alkan','dogalkn@gmail.com','1234', 'doga.jpeg');

INSERT INTO `review_marmara` (`id`, `post_id`, `user_id`, `rating`,`title`, `description`, `date`) VALUES
('1', '1', '1', '5','Very good!', 'This place was great. We saw a perfect view of Istanbul.' , current_timestamp());


