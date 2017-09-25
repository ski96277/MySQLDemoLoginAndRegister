package com.example.imransk.mysqldemo;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
EditText usernameET,passwordET;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        usernameET = (EditText) findViewById(R.id.etusername);
        passwordET = (EditText) findViewById(R.id.etpassword);

    }

    public void OnLogin(View view) {
        String username = usernameET.getText().toString();
        String password = passwordET.getText().toString();
        String type = "login";
        BackGroundWorker backGroundWorker = new BackGroundWorker(this);
        backGroundWorker.execute(type,username,password);
    }

    public void GoToRegister(View view) {
        startActivity(new Intent(this,Register.class));
    }
}
