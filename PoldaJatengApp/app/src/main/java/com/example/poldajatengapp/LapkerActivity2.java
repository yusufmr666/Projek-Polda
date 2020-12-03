package com.example.poldajatengapp;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class LapkerActivity2 extends AppCompatActivity {
    EditText txtnamalapker, txtttllapker, txtalmlapker, txtjablapker, txtharilapker, txtwktlapker, txttmplapker, txtacrlapker,txtpekerapker ;
    Button btnlapker;
    DatabaseReference lapkerr;
    Lapker lapker;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lapker2);
        txtnamalapker = (EditText) findViewById(R.id.namalapker);
        txtttllapker = (EditText) findViewById(R.id.ttllapker);
        txtpekerapker = (EditText) findViewById(R.id.pekerlapker);
        txtalmlapker = (EditText) findViewById(R.id.almlapker);
        txtjablapker = (EditText) findViewById(R.id.jablapker);
        txtharilapker = (EditText) findViewById(R.id.harilapker);
        txtwktlapker = (EditText) findViewById(R.id.wktlapker);
        txttmplapker = (EditText) findViewById(R.id.tmplapker);
        txtacrlapker = (EditText) findViewById(R.id.acrlapker);
        btnlapker = (Button) findViewById(R.id.btnlapker);
        lapker = new Lapker();
        lapkerr = FirebaseDatabase.getInstance().getReference().child("Lapker");
        btnlapker.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                lapker.setNamalapker(txtnamalapker.getText().toString().trim());
                lapker.setTtllapker(txtttllapker.getText().toString().trim());
                lapker.setPekerlapker(txtpekerapker.getText().toString().trim());
                lapker.setAlmlapker(txtalmlapker.getText().toString().trim());
                lapker.setJablapker(txtjablapker.getText().toString().trim());
                lapker.setHarilapker(txtharilapker.getText().toString().trim());
                lapker.setWktlapker(txtwktlapker.getText().toString().trim());
                lapker.setTmplapker(txttmplapker.getText().toString().trim());
                lapker.setAcrlapker(txtacrlapker.getText().toString().trim());
                lapkerr.child("lapker").push().setValue(lapker);
                Toast.makeText(getApplicationContext(), "Sukses cuy",Toast.LENGTH_LONG).show();
            }
        });
    }
}