/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.girassol.model;

import java.util.Date;
import org.mongodb.morphia.annotations.Entity;

/**
 *
 * @author cassio
 */
@Entity("professor")
public class Professor extends Usuario{

    private final int idProfessor;
    public Professor() {
        
        idProfessor = 1;
    }
    public int getIdProfessor(){
        return this.idProfessor;
    }
    
    
}
