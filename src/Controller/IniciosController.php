<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class IniciosController extends AppController
{
    public function inicio()
        {

        
//            /* Cargo el modelo de la fosa */
//            $this->loadModel('Origenes');
//            $this->loadModel('Descargas');
//            $this->loadModel('Recepciones');
//            $this->loadModel('Variedades');
//            $this->loadModel('Lotes');
//            
//            $cantidadcamiones = $this->Origenes->find('cantidadcamiones')->first()->count;
//            $cantidadtoneladas = $this->Origenes->find('cantidadtoneladas');
//            $cantidadcamionesdescargados = $this->Descargas->find('cantidadcamiones')->first()->count;
//            $cantidadtoneladasdescargadas = $this->Descargas->find('cantidadtoneladas');
//            $cantidadvariedades = $this->Descargas->find('cantidadvariedades');
//            $cantidadlotesdescargados = $this->Recepciones->find('cantidadlotesdescargados');
//            $cantidadvariedadesplanificadas = $this->Variedades->find('cantidadvariedadesplanificadas');
//            $cantidadlotesplanificados = $this->Lotes->find('cantidadplanificadas');
//            $arrozcolorado = $this->Recepciones->find('arrozcolorado');
//            $cantarrozcolorado = $this->Recepciones->find('cantarrozcolorado');
//            /*-----------------------------------------------------------------------------------------*/
//            
//            $this->set('CamionesDespachados', $cantidadcamiones );
//            $this->set('KilosDespachados', $cantidadtoneladas);
//            $this->set('CamionesDescargados', $cantidadcamionesdescargados);
//            $this->set('KilosDescargados', $cantidadtoneladasdescargadas);
//            $this->set('CantidadVariedades', $cantidadvariedades);
//            $this->set('CantidadLotesDescargados', $cantidadlotesdescargados);
//            $this->set('CantidadVariedadesPlanificadas', $cantidadvariedadesplanificadas);
//            $this->set('CantidadLotesPlanificadas', $cantidadlotesplanificados);
//            $this->set('ArrozColorado', $arrozcolorado);
//            /* Paso la cantidad de Arroz Colorado a Tn */
//            $tncantarrozcolorado = $cantarrozcolorado[0]['sum']/1000;
//            $tncantarrozcolorado = number_format($tncantarrozcolorado,2);
//            $this->set('CantArrozColorado', $tncantarrozcolorado);
//            
//            /* Cantidad de Camiones 
//            $query = $this->Origenes->find();
//            $query->select(['count' => $query->func()->count('*')]);
//            $StaticPages = $query->toArray();
//            $StaticPagesCount = $StaticPages[0]->count;
//            $this->set('CamionesDespachados',$StaticPagesCount);*/
//
//            /* Peso de los camiones de Camiones 
//            $query2 = $this->Origenes->find();
//            $query2->select(['sum' => $query->func()->sum('peso_neto_origen')]);
//            $StaticPages2 = $query2->toArray();
//            $StaticPagesCount2 = $StaticPages2[0]->sum;
//            $toneladas = $StaticPagesCount2 / 1000;
//            $this->set('KilosDespachados',$toneladas);*/
//            
//            /* Promedio por Camion */
//            $promedio = $cantidadtoneladasdescargadas / $cantidadcamionesdescargados;
//            $promedios = number_format($promedio, 2);
//            $this->set('Promedio', $promedios);
//            $porcentajedescargados = $cantidadtoneladasdescargadas / ($cantidadtoneladas/100);
//            $porcentajedescargado = number_format($porcentajedescargados,2);
//            $this->set('PorcentajeDescargado', $porcentajedescargado); 
//            $porcvariedadesdescargadas = $cantidadvariedades/($cantidadvariedadesplanificadas['0']['count']/100);
//            $porcentajevariedadesdescargadas = number_format($porcvariedadesdescargadas,2);
//            //die(debug($porcentajevariedadesdescargadas2));
//            $this->set('PorcentajeVariedadesDescargadas',$porcentajevariedadesdescargadas);
//
//            $porclotesplanificados = $cantidadlotesdescargados/($cantidadlotesplanificados['0']['count']/100);
//            $porcentajelotesplanificados = number_format($porclotesplanificados,2);
//            //die(debug($porcentajevariedadesdescargadas2));
//            $this->set('PorcentajeLotesPlanificados',$porcentajelotesplanificados);

            
            /* Ahora vamos por las recepciones */
            /* Cargo el modelo de la fosa 
            $this->loadModel('Origenes');*/
            
            
            /* Cantidad de Camiones 
            $query = $this->Origenes->find();
            $query->select(['count' => $query->func()->count('*')]);
            $StaticPages = $query->toArray();
            $StaticPagesCount = $StaticPages[0]->count;
            $this->set('CamionesDespachados',$StaticPagesCount); */           
                    
        }
}
