package com.ramiromadraiga.loginbdremote;

import android.content.Intent;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.View;

public class Intro extends ActionBarActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_intro);
    }

    public void Inicio(View view) {
        Intent i = new Intent(this, Login.class);
        startActivity(i);
    }
}
