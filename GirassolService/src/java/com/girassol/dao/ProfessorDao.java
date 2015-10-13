/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.girassol.dao;

import com.girassol.model.Professor;
import com.mongodb.MongoClient;
import com.mongodb.MongoClientURI;
import org.mongodb.morphia.Datastore;
import org.mongodb.morphia.Morphia;

/**
 *
 * @author cassio
 */
public class ProfessorDao {
     
    /**Conexão com o banco local: usar para testar no webservice localhost */
    MongoClient mongo = new MongoClient("localhost", 27017);
    
    /**Conexão com o banco de dados da nuvem usando o Openshift*/
    //MongoClient mongo = new MongoClient(new MongoClientURI("mongodb://admin:fzTJTEZjAXFt@127.2.108.2"));
   //Nome da tabela
    Datastore datastore = new Morphia().createDatastore(mongo, "banco");
  
  public void Inserir(Professor usuario){
      datastore.save(usuario);
    }
}
