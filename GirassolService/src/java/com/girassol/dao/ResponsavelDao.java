/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.girassol.dao;

import com.girassol.model.Responsavel;
import com.mongodb.MongoClient;

import org.mongodb.morphia.Datastore;
import org.mongodb.morphia.Morphia;
import org.mongodb.morphia.query.Query;


/**
 *
 * @author cassio
 */
public class ResponsavelDao {
        MongoClient mongo = new MongoClient("localhost", 27017);
    
    /**Conexão com o banco de dados da nuvem usando o Openshift*/
    //MongoClient mongo = new MongoClient(new MongoClientURI("mongodb://admin:fzTJTEZjAXFt@127.2.108.2"));
   //Nome da tabela
    Datastore datastore = new Morphia().createDatastore(mongo, "banco");
  
  public void Inserir(Responsavel responsavel){
      datastore.save(responsavel);
    }
  
  public Responsavel buscarNome(String nome){
      //Buscar no banco de dados
      Query query = datastore.createQuery(Responsavel.class).filter("username =", nome);
      //Instancia o Usurario com a query retornada
      Responsavel responsavel = (Responsavel) query.get();
      
      if(responsavel != null){
          return responsavel;
      }else return null;
  }
}