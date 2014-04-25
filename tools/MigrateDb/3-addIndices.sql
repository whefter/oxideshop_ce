#
# Add missing indices
#

ALTER TABLE `oxarticles2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxarticles2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxarticles2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxcategories2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxcategories2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxcategories2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxobject2category2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxobject2category2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxobject2category2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxmanufacturers2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxmanufacturers2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxmanufacturers2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxvendor2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxvendor2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxvendor2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxdiscount2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxdiscount2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxdiscount2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxattribute2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxattribute2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxattribute2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxlinks2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxlinks2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxlinks2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxvoucherseries2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxvoucherseries2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxvoucherseries2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxnews2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxnews2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxnews2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxselectlist2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxselectlist2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxselectlist2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxwrapping2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxwrapping2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxwrapping2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxdeliveryset2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxdeliveryset2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxdeliveryset2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);

ALTER TABLE `oxdelivery2shop` ADD UNIQUE KEY `OXMAPIDX` (`OXSHOPID`, `OXMAPOBJECTID`);
ALTER TABLE `oxdelivery2shop` ADD KEY `OXMAPOBJECTID` (`OXMAPOBJECTID`);
ALTER TABLE `oxdelivery2shop` ADD KEY `OXSHOPID` (`OXSHOPID`);
