package com.example.poldajatengapp;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class Lapor extends AppCompatActivity {

EditText txtname, txtnim, txthrtgl, txtterjadi,txttimbul ;
Button btnsave;
DatabaseReference reff;
Laporan laporan;

    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lapor);
        txtname = (EditText) findViewById(R.id.edt_nama);
        txtnim = (EditText) findViewById(R.id.edt_pukul);
        txthrtgl = (EditText) findViewById(R.id.edt_hrtgl);
        txtterjadi = (EditText) findViewById(R.id.edt_terjadi);
        txttimbul = (EditText) findViewById(R.id.edt_timbul);
        btnsave = (Button) findViewById(R.id.btn_save);
        laporan = new Laporan();
        reff = FirebaseDatabase.getInstance().getReference().child("Laporan");
        btnsave.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                laporan.setNama(txtname.getText().toString().trim());
                laporan.setNim(txtnim.getText().toString().trim());
                laporan.setTgll(txthrtgl.getText().toString().trim());
                laporan.setTerjadi(txtterjadi.getText().toString().trim());
                laporan.setTimbul(txttimbul.getText().toString().trim());
                reff.child("lapor").push().setValue(laporan);;
                Toast.makeText(getApplicationContext(), "Sukses",Toast.LENGTH_LONG).show();
            }
        });
    }



}
