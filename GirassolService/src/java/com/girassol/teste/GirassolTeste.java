/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.girassol.teste;

import com.girassol.dao.ProfessorDao;
import com.girassol.dao.ResponsavelDao;
import com.girassol.model.Professor;
import com.girassol.model.Responsavel;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.util.Calendar;
import java.util.Date;

/**
 *
 * @author cassio
 */
public class GirassolTeste {

    /**
     * @param args the command line arguments
     */
     //DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss"); 
     //Date date = new Date(); 
    public static void main(String[] args) {
            //testeCadastroResponsavel();
        //testeBuscaResponsavel();
        testCadastrarResponsavel("Roger", "123");
    }
   
    public static void testeCadastroProfessor(String nome,String senha){
        ProfessorDao profDao = new ProfessorDao();
        DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss"); 
        Date date = new Date(); 
        Professor prof = new Professor();
        prof.setUsername(nome);
        prof.setSenha(senha);
        prof.setDataCadastro(dateFormat.format(date));
        profDao.Inserir(prof);
    }
    
    public static void testeCadastroResponsavel(String nome, String senha){
        DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss"); 
        Date date = new Date(); 
        Responsavel r = new Responsavel();
        ResponsavelDao respDao = new ResponsavelDao();
        r.setSenha(nome);
        r.setUsername(senha);
        r.setDataCadastro(dateFormat.format(date));
        respDao.Inserir(r);
    }
    public static void testeBuscaResponsavel(){
         ResponsavelDao respDao = new ResponsavelDao();
         Responsavel resp = respDao.buscarNome("Maria");
         System.out.println(resp.getUsername()+" "+resp.getDataCadastro()+""+resp.getIdResponsavel());
    }
    public static void testCadastrarResponsavel(String nome, String senha){
    
        ResponsavelDao respD = new ResponsavelDao();
        Responsavel responsavel = respD.buscarNome(nome);
        
        
        if(responsavel == null){
            DateFormat formato = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
            Date data = new Date();
            responsavel = new Responsavel();
            responsavel.setSenha(senha);
            responsavel.setUsername(nome);
            responsavel.setDataCadastro(formato.format(data));
            
            respD.Inserir(responsavel);
            System.out.println("Cadastro de usuario realizado com sucesso!");
        }else System.out.println("Usuario "+nome+" já existe!");
    }
    
}
