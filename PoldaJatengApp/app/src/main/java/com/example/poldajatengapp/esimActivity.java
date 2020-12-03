package com.example.poldajatengapp;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class esimActivity extends AppCompatActivity {

    EditText txtnama, txtnik, txtttl, txtalamat;
    Button btnsel;
    DatabaseReference simm;
    Esim esim;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_esim);

        txtnama = (EditText) findViewById(R.id.namasim);
        txtnik = (EditText) findViewById(R.id.nik);
        txtttl = (EditText) findViewById(R.id.ttl);
        txtalamat = (EditText) findViewById(R.id.alam);
        btnsel = (Button) findViewById(R.id.btnsel);
        esim = new Esim();
        simm = FirebaseDatabase.getInstance().getReference().child("Esim");
        btnsel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int nik = Integer.parseInt(txtnik.getText().toString().trim());
                esim.setName(txtnama.getText().toString().trim());
                esim.setTanggal(txtttl.getText().toString().trim());
                esim.setAlamat(txtalamat.getText().toString().trim());
                esim.setNik(nik);
                simm.child("sim1").push().setValue(esim);
                Toast.makeText(getApplicationContext(), "Sukses cuy",Toast.LENGTH_LONG).show();
            }
        });
    }
}