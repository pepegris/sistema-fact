


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>REPORTES</title>
</head>
<body>

<?php 
  include 'cabecera.php'  ;

            $serverName = "SQL"; 
            $connectionInfo = array( "Database"=>"master", "UID"=>"syncro", "PWD"=>"syncro");
            $conn = sqlsrv_connect( $serverName, $connectionInfo);
  
            sqlsrv_close($conn);

?>

<div class="buscador">

  <form action="stock_resultado_total.php" method="post" id="formulario" enctype="multipart/form-data">

  <div class="form-check">
  <input class="form-check-input" type="checkbox" name='acari_a' value="15" id="acari_a">
  <label class="form-check-label" for="acari_a">
    Acari_a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="25" name='higue_a' id="higue_a" checked>
  <label class="form-check-label" for="higue_a">
    Higue_a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="35" name='valena_a' id="valena_a" checked>
  <label class="form-check-label" for="valena_a">
    valena_a
  </label>

</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name='apura_a' value="45" id="apura_a">
  <label class="form-check-label" for="apura_a">
    Apura_A
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="55" name='catica2a' id="catica2a" checked>
  <label class="form-check-label" for="catica2a">
    Catica2a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="65" name='corina2a' id="corina2a" checked>
  <label class="form-check-label" for="corina2a">
    Corina2a
  </label>
</div>
   

<div class="form-check">
  <input class="form-check-input" type="checkbox" name='kagu_a' value="75" id="kagu_a">
  <label class="form-check-label" for="kagu_a">
    Kagu_a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="85" name='matur_a' id="matur_a" checked>
  <label class="form-check-label" for="matur_a">
    Matur_a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="95" name='merina_a' id="merina_a" checked>
  <label class="form-check-label" for="merina_a">
    Merina_a
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name='merina3a' value="105" id="merina3a">
  <label class="form-check-label" for="merina3a">
    Merina3a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="115" name='nacharia' id="nacharia" checked>
  <label class="form-check-label" for="nacharia">
    Nacharia
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="125" name='ojena_a' id="ojena_a" checked>
  <label class="form-check-label" for="ojena_a">
    Ojena_a
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name='puecruza' value="135" id="puecruza">
  <label class="form-check-label" for="puecruza">
    Puecruza
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="145" name='pufijo_a' id="pufijo_a" checked>
  <label class="form-check-label" for="pufijo_a">
    Pufijo_a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="155" name='trina_a' id="trina_a" checked>
  <label class="form-check-label" for="trina_a">
    Trina_a
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name='turme_a' value="165" id="turme_a">
  <label class="form-check-label" for="turme_a">
    Turme_a
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="175" name='vallepaa' id="vallepaa" checked>
  <label class="form-check-label" for="vallepaa">
    vallepaa
  </label>
</div>

   




      <label for="linea">Linea</label>
    <select class="linea" name='linea' id="linea">
    <option>	001	</option>
<option>	002	</option>
<option>	003	</option>
<option>	004	</option>
<option>	005	</option>
<option>	006	</option>
<option>	010	</option>
<option>	012	</option>
<option>	015	</option>
<option>	017	</option>
<option>	018	</option>
<option>	020	</option>
<option>	021	</option>
<option>	022	</option>
<option>	023	</option>
<option>	027	</option>
<option>	028	</option>
<option>	029	</option>
<option>	030	</option>
<option>	033	</option>
<option>	035	</option>
<option>	036	</option>
<option>	043	</option>
<option>	044	</option>
<option>	047	</option>
<option>	049	</option>
<option>	051	</option>
<option>	053	</option>
<option>	055	</option>
<option>	058	</option>
<option>	059	</option>
<option>	061	</option>
<option>	063	</option>
<option>	065	</option>
<option>	066	</option>
<option>	072	</option>
<option>	074	</option>
<option>	075	</option>
<option>	076	</option>
<option>	077	</option>
<option>	078	</option>
<option>	079	</option>
<option>	080	</option>
<option>	081	</option>
<option>	082	</option>
<option>	083	</option>
<option>	085	</option>
<option>	086	</option>
<option>	088	</option>
<option>	089	</option>
<option>	091	</option>
<option>	094	</option>
<option>	097	</option>
<option>	099	</option>
<option>	100	</option>
<option>	101	</option>
<option>	102	</option>
<option>	103	</option>
<option>	104	</option>
<option>	105	</option>
<option>	106	</option>
<option>	107	</option>
<option>	108	</option>
<option>	110	</option>
<option>	114	</option>
<option>	116	</option>
<option>	117	</option>
<option>	118	</option>
<option>	120	</option>
<option>	121	</option>
<option>	122	</option>
<option>	123	</option>
<option>	125	</option>
<option>	126	</option>
<option>	127	</option>
<option>	128	</option>
<option>	129	</option>
<option>	130	</option>
<option>	132	</option>
<option>	133	</option>
<option>	135	</option>
<option>	136	</option>
<option>	137	</option>
<option>	141	</option>
<option>	143	</option>
<option>	144	</option>
<option>	146	</option>
<option>	151	</option>
<option>	152	</option>
<option>	153	</option>
<option>	154	</option>
<option>	155	</option>
<option>	156	</option>
<option>	160	</option>
<option>	161	</option>
<option>	162	</option>
<option>	164	</option>
<option>	165	</option>
<option>	166	</option>
<option>	167	</option>
<option>	168	</option>
<option>	170	</option>
<option>	172	</option>
<option>	173	</option>
<option>	174	</option>
<option>	176	</option>
<option>	177	</option>
<option>	178	</option>
<option>	180	</option>
<option>	182	</option>
<option>	184	</option>
<option>	185	</option>
<option>	186	</option>
<option>	187	</option>
<option>	188	</option>
<option>	190	</option>
<option>	191	</option>
<option>	192	</option>
<option>	193	</option>
<option>	194	</option>
<option>	195	</option>
<option>	196	</option>
<option>	197	</option>
<option>	198	</option>
<option>	199	</option>
<option>	200	</option>
<option>	201	</option>
<option>	202	</option>
<option>	203	</option>
<option>	204	</option>
<option>	205	</option>
<option>	206	</option>
<option>	207	</option>
<option>	208	</option>
<option>	209	</option>
<option>	210	</option>
<option>	211	</option>
<option>	212	</option>
<option>	213	</option>
<option>	214	</option>
<option>	215	</option>
<option>	216	</option>
<option>	217	</option>
<option>	218	</option>
<option>	219	</option>
<option>	220	</option>
<option>	221	</option>
<option>	222	</option>
<option>	223	</option>
<option>	224	</option>
<option>	225	</option>
<option>	226	</option>
<option>	227	</option>
<option>	228	</option>
<option>	229	</option>
<option>	230	</option>
<option>	231	</option>
<option>	232	</option>
<option>	233	</option>
<option>	234	</option>
<option>	235	</option>
<option>	236	</option>
<option>	237	</option>
<option>	238	</option>
<option>	239	</option>
<option>	240	</option>
<option>	241	</option>
<option>	242	</option>
<option>	243	</option>
<option>	244	</option>
<option>	245	</option>
<option>	246	</option>
<option>	247	</option>
<option>	248	</option>
<option>	249	</option>
<option>	250	</option>
<option>	251	</option>
<option>	252	</option>
<option>	253	</option>
<option>	254	</option>
<option>	255	</option>
<option>	256	</option>
<option>	257	</option>
<option>	258	</option>
<option>	259	</option>
<option>	260	</option>
<option>	261	</option>
<option>	262	</option>
<option>	263	</option>
<option>	264	</option>
<option>	265	</option>
<option>	266	</option>
<option>	267	</option>
<option>	268	</option>
<option>	269	</option>
<option>	270	</option>
<option>	271	</option>
<option>	272	</option>
<option>	273	</option>
<option>	274	</option>
<option>	275	</option>
<option>	276	</option>
<option>	277	</option>
<option>	278	</option>
<option>	279	</option>
<option>	280	</option>
<option>	281	</option>
<option>	282	</option>
<option>	283	</option>
<option>	284	</option>
<option>	285	</option>
<option>	286	</option>
<option>	287	</option>
<option>	288	</option>
<option>	289	</option>
<option>	290	</option>
<option>	291	</option>
<option>	293	</option>
<option>	294	</option>
<option>	295	</option>
<option>	296	</option>
<option>	297	</option>
<option>	298	</option>
<option>	299	</option>
<option>	300	</option>
<option>	301	</option>
<option>	302	</option>
<option>	303	</option>
<option>	304	</option>
<option>	305	</option>
<option>	306	</option>
<option>	307	</option>
<option>	308	</option>
<option>	310	</option>
<option>	311	</option>
<option>	312	</option>
<option>	313	</option>
<option>	314	</option>
<option>	316	</option>
<option>	317	</option>
<option>	318	</option>
<option>	319	</option>
<option>	320	</option>
<option>	321	</option>
<option>	322	</option>
<option>	323	</option>
<option>	324	</option>
<option>	325	</option>
<option>	326	</option>
<option>	327	</option>
<option>	328	</option>
<option>	329	</option>
<option>	330	</option>
<option>	331	</option>
<option>	332	</option>
<option>	333	</option>
<option>	334	</option>
<option>	335	</option>
<option>	336	</option>
<option>	337	</option>
<option>	338	</option>
<option>	339	</option>
<option>	340	</option>
<option>	341	</option>
<option>	342	</option>
<option>	343	</option>
<option>	344	</option>
<option>	345	</option>
<option>	346	</option>
<option>	347	</option>
<option>	348	</option>
<option>	349	</option>
<option>	350	</option>
<option>	351	</option>
<option>	352	</option>
<option>	353	</option>
<option>	354	</option>
<option>	355	</option>
<option>	357	</option>
<option>	358	</option>
<option>	359	</option>
<option>	360	</option>
<option>	361	</option>
<option>	362	</option>
<option>	363	</option>
<option>	364	</option>
<option>	365	</option>
<option>	366	</option>
<option>	367	</option>
<option>	368	</option>
<option>	369	</option>
<option>	370	</option>
<option>	371	</option>
<option>	372	</option>
<option>	373	</option>
<option>	374	</option>
<option>	375	</option>
<option>	376	</option>
<option>	377	</option>
<option>	378	</option>
<option>	379	</option>
<option>	380	</option>
<option>	382	</option>
<option>	383	</option>
<option>	384	</option>
<option>	385	</option>
<option>	386	</option>
<option>	387	</option>
<option>	388	</option>
<option>	389	</option>
<option>	390	</option>
<option>	391	</option>
<option>	392	</option>
<option>	393	</option>
<option>	394	</option>
<option>	395	</option>
<option>	396	</option>
<option>	397	</option>
<option>	398	</option>
<option>	399	</option>
<option>	400	</option>
<option>	401	</option>
<option>	402	</option>
<option>	403	</option>
<option>	404	</option>
<option>	405	</option>
<option>	406	</option>
<option>	407	</option>
<option>	408	</option>
<option>	409	</option>
<option>	410	</option>
<option>	411	</option>
<option>	412	</option>
<option>	413	</option>
<option>	415	</option>
<option>	416	</option>
<option>	417	</option>
<option>	418	</option>
<option>	419	</option>
<option>	420	</option>
<option>	421	</option>
<option>	422	</option>
<option>	423	</option>
<option>	424	</option>
<option>	425	</option>
<option>	426	</option>
<option>	427	</option>
<option>	428	</option>
<option>	429	</option>
<option>	430	</option>
<option>	431	</option>
<option>	432	</option>
<option>	433	</option>
<option>	434	</option>
<option>	435	</option>
<option>	436	</option>
<option>	437	</option>
<option>	438	</option>
<option>	439	</option>
<option>	440	</option>
<option>	441	</option>
<option>	442	</option>
<option>	443	</option>
<option>	444	</option>
<option>	445	</option>
<option>	446	</option>
<option>	447	</option>
<option>	448	</option>
<option>	449	</option>
<option>	450	</option>
<option>	451	</option>
<option>	452	</option>
<option>	453	</option>
<option>	454	</option>
<option>	455	</option>
<option>	456	</option>
<option>	457	</option>
<option>	458	</option>
<option>	459	</option>
<option>	460	</option>
<option>	461	</option>
<option>	462	</option>
<option>	463	</option>
<option>	464	</option>
<option>	465	</option>
<option>	466	</option>
<option>	467	</option>
<option>	468	</option>
<option>	469	</option>
<option>	470	</option>
<option>	472	</option>
<option>	473	</option>
<option>	474	</option>
<option>	475	</option>
<option>	476	</option>
<option>	477	</option>
<option>	478	</option>
<option>	479	</option>
<option>	481	</option>
<option>	482	</option>
<option>	483	</option>
<option>	484	</option>
<option>	485	</option>
<option>	486	</option>
<option>	487	</option>
<option>	488	</option>
<option>	489	</option>
<option>	490	</option>
<option>	491	</option>
<option>	492	</option>
<option>	493	</option>
<option>	494	</option>
<option>	495	</option>
<option>	496	</option>
<option>	497	</option>
<option>	498	</option>
<option>	499	</option>
<option>	500	</option>
<option>	501	</option>
<option>	502	</option>
<option>	503	</option>
<option>	504	</option>
<option>	505	</option>
<option>	506	</option>
<option>	507	</option>
<option>	508	</option>
<option>	509	</option>
<option>	510	</option>
<option>	511	</option>
<option>	512	</option>
<option>	513	</option>
<option>	514	</option>
<option>	515	</option>
<option>	516	</option>
<option>	517	</option>
<option>	518	</option>
<option>	519	</option>
<option>	520	</option>
<option>	521	</option>
<option>	522	</option>
<option>	523	</option>
<option>	524	</option>
<option>	525	</option>
<option>	526	</option>
<option>	527	</option>
<option>	528	</option>
<option>	529	</option>
<option>	530	</option>
<option>	531	</option>
<option>	532	</option>
<option>	533	</option>
<option>	534	</option>
<option>	535	</option>
<option>	536	</option>
<option>	537	</option>
<option>	538	</option>
<option>	539	</option>
<option>	540	</option>
<option>	541	</option>
<option>	542	</option>
<option>	545	</option>
<option>	546	</option>
<option>	548	</option>
<option>	551	</option>
<option>	552	</option>
<option>	553	</option>
<option>	554	</option>
<option>	555	</option>
<option>	556	</option>
<option>	557	</option>
<option>	558	</option>
<option>	559	</option>
<option>	560	</option>
<option>	561	</option>
<option>	562	</option>
<option>	563	</option>
<option>	564	</option>
<option>	565	</option>
<option>	566	</option>
<option>	567	</option>
<option>	568	</option>
<option>	569	</option>
<option>	570	</option>
<option>	571	</option>
<option>	572	</option>
<option>	573	</option>
<option>	574	</option>
<option>	575	</option>
<option>	576	</option>
<option>	577	</option>
<option>	579	</option>
<option>	580	</option>
<option>	582	</option>
<option>	584	</option>
<option>	585	</option>
<option>	586	</option>
<option>	588	</option>
<option>	589	</option>
<option>	590	</option>
<option>	591	</option>
<option>	592	</option>
<option>	593	</option>
<option>	594	</option>
<option>	595	</option>
<option>	596	</option>
<option>	599	</option>
<option>	600	</option>
<option>	601	</option>
<option>	602	</option>
<option>	603	</option>
<option>	604	</option>
<option>	605	</option>
<option>	606	</option>
<option>	607	</option>
<option>	608	</option>
<option>	609	</option>
<option>	610	</option>
<option>	611	</option>
<option>	612	</option>
<option>	613	</option>
<option>	614	</option>
<option>	615	</option>
<option>	616	</option>
<option>	617	</option>
<option>	618	</option>
<option>	619	</option>
<option>	620	</option>
<option>	622	</option>
<option>	623	</option>
<option>	624	</option>
<option>	625	</option>
<option>	626	</option>
<option>	627	</option>
<option>	628	</option>
<option>	629	</option>
<option>	630	</option>
<option>	631	</option>
<option>	632	</option>
<option>	633	</option>
<option>	634	</option>
<option>	635	</option>
<option>	636	</option>
<option>	637	</option>
<option>	638	</option>
<option>	639	</option>
<option>	641	</option>
<option>	642	</option>
<option>	643	</option>
<option>	644	</option>
<option>	645	</option>
<option>	646	</option>
<option>	647	</option>
<option>	648	</option>
<option>	649	</option>
<option>	650	</option>
<option>	651	</option>
<option>	652	</option>
<option>	653	</option>
<option>	654	</option>
<option>	655	</option>
<option>	656	</option>
<option>	657	</option>
<option>	658	</option>
<option>	659	</option>
<option>	660	</option>
<option>	661	</option>
<option>	662	</option>
<option>	663	</option>
<option>	664	</option>
<option>	665	</option>
<option>	666	</option>
<option>	669	</option>
<option>	670	</option>
<option>	671	</option>
<option>	672	</option>
<option>	673	</option>
<option>	674	</option>
<option>	675	</option>
<option>	676	</option>
<option>	677	</option>
<option>	678	</option>
<option>	679	</option>
<option>	680	</option>
<option>	681	</option>
<option>	987	</option>
<option>	989	</option>
<option>	999	</option>
<option>	A01   	</option>
<option>	A02   	</option>
<option>	A03   	</option>
<option>	A04   	</option>
<option>	A05   	</option>
<option>	A06   	</option>
<option>	A07   	</option>
<option>	A08   	</option>
<option>	A09   	</option>
<option>	A10   	</option>
<option>	A11   	</option>
<option>	A12   	</option>
<option>	SEV   	</option>
		

      </select>
      <input type="submit" value="Enviar">
    
  
  
  </form>



</div>















    
</body>
</html>


