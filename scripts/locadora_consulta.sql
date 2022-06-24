select i.cliente, c.carros, t.tipo, m.montadora, c.valor from carros c 
inner join tipo t on t.cod_tipo = c.tipo_carro 
inner join montadora m on m.cod_montadora = c.montadora_carro 
inner join carros_locacao o on o.carros = c.cod_carro 
inner join locacao a on a.cod_locacao = o.locacao 
inner join cliente i on i.cod_cliente = a.cliente_locacao;

select i.cliente, c.carro, t.tipo, m.montadora, b.bairro from carro c 
inner join tipo t on t.cod_tipo = c.tipo_carro
inner join montadora m on m.cod_montadora = c.montadora_carro
inner join carros_locacao o on o.carro_locado = c.cod_carro 
inner join locacao a on a.cod_locacao = o.locacao 
inner join cliente i on i.cod_cliente = a.cliente_locacao
inner join bairro b on b.cod_bairro = a.cliente_locacao;