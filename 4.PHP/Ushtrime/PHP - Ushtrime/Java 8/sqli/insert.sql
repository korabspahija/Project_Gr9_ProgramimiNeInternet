use Ushtrime;

select * from studentet;

SET SQL_SAFE_UPDATES = 0;

insert into studentet (id,emri,mbiemri,password,data_regjistrimit) values (1,'Filan','Fisteku','FilanFisteku',now());
insert into studentet (id,emri,mbiemri,password,data_regjistrimit) values (2,'Barak','Obama','bobama',now());
insert into studentet (id,emri,mbiemri,password,data_regjistrimit) values (3,'Fransua','Hollond','fhollond',now());
