package com.example.poldajatengapp;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class SkckActivity extends AppCompatActivity {

    EditText txtnamaskck, txtttlskck, txtagmskck, txtbnsgskck, txtklmskck, txtalmtskck, txtnikskck, txthpskck ;
    Button btnskck;
    DatabaseReference skckk;
    Skck skck;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_skck);

        txtnamaskck = (EditText) findViewById(R.id.namaskck);
        txtttlskck = (EditText) findViewById(R.id.ttlskck);
        txtagmskck = (EditText) findViewById(R.id.agamaskck);
        txtbnsgskck = (EditText) findViewById(R.id.kebangsaanskck);
        txtklmskck = (EditText) findViewById(R.id.kelaminskck);
        txtalmtskck = (EditText) findViewById(R.id.alamatskck);
        txtnikskck = (EditText) findViewById(R.id.nikskck);
        txthpskck = (EditText) findViewById(R.id.nohpskck);
        btnskck = (Button) findViewById(R.id.btnskck);
        skck = new Skck();
        skckk = FirebaseDatabase.getInstance().getReference().child("Skck");
        btnskck.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                skck.setNamaskck(txtnamaskck.getText().toString().trim());
                skck.setTtlskck(txtttlskck.getText().toString().trim());
                skck.setAgamaskck(txtagmskck.getText().toString().trim());
                skck.setKebangsaanskck(txtbnsgskck.getText().toString().trim());
                skck.setKlmskck(txtklmskck.getText().toString().trim());
                skck.setAlmskck(txtalmtskck.getText().toString().trim());
                skck.setNikskck(txtnikskck.getText().toString().trim());
                skck.setNohpskck(txthpskck.getText().toString().trim());
                skckk.child("skck").push().setValue(skck);
                Toast.makeText(getApplicationContext(), "Sukses cuy",Toast.LENGTH_LONG).show();
            }
        });
    }
}