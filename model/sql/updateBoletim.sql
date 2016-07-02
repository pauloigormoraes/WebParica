UPDATE 
	boletim
SET
	bo_n1 = :bo_n1, 
    bo_n2 = :bo_n2, 
    bo_n3 = :bo_n3, 
    bo_n4 = :bo_n4, 
    bo_f1 = :bo_f1, 
    bo_f2 = :bo_f2,
    bo_f3 = :bo_f3, 
    bo_f4 = :bo_f4
WHERE
	bo_ma_id = :bo_ma_id AND bo_al_id = :bo_al_id