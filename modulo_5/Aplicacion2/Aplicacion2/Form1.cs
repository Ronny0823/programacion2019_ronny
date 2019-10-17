using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace Aplicacion2
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        public void conexionBaseDatos()
        {
            string connectionString = "datasource=127.0.0.1;port=3306;username=root;password=;database=github;";

            // Prepara la conexión
            MySqlConnection databaseConnection = new MySqlConnection(connectionString);

            // Abre la base de datos
            databaseConnection.Open();
        }

        private void SaveUser( string nombre, string correo, string usuario, string contraseña, string bio)
        {
            string connectionString = "datasource=127.0.0.1;port=3306;username=root;password=;database=github;";
            var query = string.Format("INSERT INTO usuario( nombre, correo, username, PASSWORD, bio ) VALUES (\"{0}\", \"{1}\", \"{2}\",\"{3}\", \"{4}\")",  nombre,  correo,  usuario,  contraseña, bio );

            MySqlConnection databaseConnection = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
            commandDatabase.CommandTimeout = 60;

            try
            {
                databaseConnection.Open();
                MySqlDataReader myReader = commandDatabase.ExecuteReader();

                MessageBox.Show("Usuario insertado satisfactoriamente");

                databaseConnection.Close();
            }
            catch (Exception ex)
            {
                // Mostrar cualquier error
                MessageBox.Show(ex.Message);
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void textBox6_TextChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            //Capturar los datos
            var nombre = txtnombre.Text;
            var correo = txtcorreo.Text;
            var usuario = txtusuario.Text;
            var contraseña = txtcontraseña.Text;
            var bio = txtbio.Text;

            //validar los datos
            //nombre
            if (string.IsNullOrEmpty(nombre))
            {
                MessageBox.Show("El nombre no puede estar vacio");
                txtnombre.Focus();
                return;
            }
            
            // correo

            if (string.IsNullOrEmpty(correo))
            {
                MessageBox.Show("El correo no puede estar vacio");
                txtnombre.Focus();
                return;
            }

            //usuario

            if (string.IsNullOrEmpty(usuario))
            {
                MessageBox.Show("El usuario no puede estar vacio");
                txtnombre.Focus();
                return;
            }

            //contraseña

            if (string.IsNullOrEmpty(contraseña))
            {
                MessageBox.Show("La contraseña no puede estar vacia");
                txtnombre.Focus();
                return;
            }
            //preparar qurry
            //var query = @"INSERT INTO usuario( nombre, correo, username, PASSWORD, bio ) 
           // VALUES (\"ronny\", \"reyesronny@gmail.com\", \"reyes\", \"1234\", \"gracias\");

            //concatenar el gmail.com
            correo += "@gmail.com";

            SaveUser(nombre, correo, usuario, contraseña, bio);

            // Exito
            MessageBox.Show("usuario registrado");
            //vaciar el formulario cuando se registre el usuario
            txtnombre.Text = "";
            txtcorreo.Text = "";
            txtusuario.Text = "";
            txtcontraseña.Text = "";
            txtbio.Text = "";

        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void button1_MouseDown(object sender, MouseEventArgs e)
        {

        }

        private void button1_MouseHover(object sender, EventArgs e)
        {
            button1.BackColor = Color.Aquamarine;
           
        }

        private void button1_MouseLeave(object sender, EventArgs e)
        {
            
        }

        private void textBox6_MouseHover(object sender, EventArgs e)
        {
            button1.BackColor = Color.CornflowerBlue;

        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void label8_Click(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            
        }
    }
}
