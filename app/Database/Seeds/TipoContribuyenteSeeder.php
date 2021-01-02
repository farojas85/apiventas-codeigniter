<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipoContribuyenteSeeder extends Seeder
{
	public function run()
	{
		$registros = [
            ['codigo' => '01','nombre' => 'PERSONA NATURAL SIN NEGOCIO'],
            ['codigo' => '02','nombre' => 'PERSONA NATURAL CON NEGOCIO'],
            ['codigo' => '03','nombre' => 'SOCIEDAD CONYUGAL SIN NEGOCIO'],
            ['codigo' => '04','nombre' => 'SOCIEDAD CONYUGAL CON NEGOCIO'],
            ['codigo' => '05','nombre' => 'SUCESION INDIVISA SIN NEGOCIO'],
            ['codigo' => '06','nombre' => 'SUCESION INDIVISA CON NEGOCIO'],
            ['codigo' => '07','nombre' => 'EMPRESA INDIVIDUAL DE RESP. LTDA'],
            ['codigo' => '08','nombre' => 'SOCIEDAD CIVIL'],
            ['codigo' => '09','nombre' => 'SOCIEDAD IRREGULAR'],
            ['codigo' => '10','nombre' => 'ASOCIACION EN PARTICIPACION'],
            ['codigo' => '11','nombre' => 'ASOCIACION'],
            ['codigo' => '12','nombre' => 'FUNDACION'],
            ['codigo' => '13','nombre' => 'SOCIEDAD EN COMANDITA SIMPLE'],
            ['codigo' => '14','nombre' => 'SOCIEDAD COLECTIVA'],
            ['codigo' => '15','nombre' => 'INSTITUCIONES PUBLICAS'],
            ['codigo' => '16','nombre' => 'INSTITUCIONES RELIGIOSAS'],
            ['codigo' => '17','nombre' => 'SOCIEDAD DE BENEFICIENCIA'],
            ['codigo' => '18','nombre' => 'ENTIDADES DE AUXILIO MUTUO'],
            ['codigo' => '19','nombre' => 'UNIVERS. CENTROS EDUCAT. Y CULT.'],
            ['codigo' => '20','nombre' => 'GOBIERNO REGIONAL, LOCAL'],
            ['codigo' => '21','nombre' => 'GOBIERNO CENTRAL'],
            ['codigo' => '22','nombre' => 'COMUNIDAD LABORAL'],
            ['codigo' => '23','nombre' => 'COMUNIDAD CAMPESINA,NATIVA,COMUNAL'],
            ['codigo' => '24','nombre' => 'COOPERATIVAS, SAIS, CAPS'],
            ['codigo' => '25','nombre' => 'EMPRESA DE PROPIEDAD SOCIAL'],
            ['codigo' => '26','nombre' => 'SOCIEDAD ANONIMA'],
            ['codigo' => '27','nombre' => 'SOCIEDAD EN COMANDITA POR ACCIONES'],
            ['codigo' => '28','nombre' => 'SOC.COM.RESPONS. LTDA'],
            ['codigo' => '29','nombre' => 'SUC,AG.EMP.EXTRANJ,EST.PERM NO DOM.'],
            ['codigo' => '30','nombre' => 'EMPRESA DE DERECHO PUBLICO'],
            ['codigo' => '31','nombre' => 'EMPRESA ESTATAL DE DERECHO PRIVADO'],
            ['codigo' => '32','nombre' => 'EMPRESA DE ECONOMIA MIXTA'],
            ['codigo' => '33','nombre' => 'ACCIONARIADO DEL ESTADO'],
            ['codigo' => '34','nombre' => 'MISIONES DIPLOMATICAS Y ORG. INTER.'],
            ['codigo' => '35','nombre' => 'JUNTA DE PROPIETARIOS'],
            ['codigo' => '36','nombre' => 'OF.REPRESENTACION DE NO DOMICILIADO'],
            ['codigo' => '37','nombre' => 'FONDOS MUTUOS DE INVERSION'],
            ['codigo' => '38','nombre' => 'SOCIEDAD ANONIMA ABIERTA'],
            ['codigo' => '39','nombre' => 'SOCIEDAD ANONIMA CERRADA'],
            ['codigo' => '40','nombre' => 'CONTRATOS COLABORACION EMPRESARIAL'],
            ['codigo' => '41','nombre' => 'ENT.INST.COOPERAC.TECNICA - ENIEX'],
            ['codigo' => '42','nombre' => 'COMUNIDAD DE BIENES'],
            ['codigo' => '43','nombre' => 'SOCIEDAD MINERA DE RESP.LIMITADA'],
            ['codigo' => '44','nombre' => 'ASOC. FUNDAC. Y COMITE NO INSCRITOS'],
            ['codigo' => '45','nombre' => 'PARTIDOS,MOVIM, ALIANZAS POLITICAS'],
            ['codigo' => '46','nombre' => 'ASOC. DE HECHO DE PROFESIONALES'],
            ['codigo' => '47','nombre' => 'CAFAES Y SUBCAFAES'],
            ['codigo' => '48','nombre' => 'SINDICATOS Y FEDERACIONES'],
            ['codigo' => '49','nombre' => 'COLEGIOS PROFESIONALES'],
            ['codigo' => '50','nombre' => 'COMITES INSCRITOS'],
            ['codigo' => '51','nombre' => 'ORGANIZACIONES SOCIALES DE BASE']
        ];
        
        $this->db->table('tipo_contribuyentes')->ignore(true)->insertBatch($registros);
	}
}
