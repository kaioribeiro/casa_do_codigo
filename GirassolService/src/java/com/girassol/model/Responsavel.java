/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.girassol.model;

import org.bson.types.ObjectId;
import org.mongodb.morphia.annotations.Entity;

/**
 *
 * @author cassio
 */
@Entity
public class Responsavel extends Usuario{
    
    private final int idResponsavel;

 
    public Responsavel() {
      
        this.idResponsavel = 2;
    }
    public int getIdResponsavel() {
        return idResponsavel;
    }
    
}
