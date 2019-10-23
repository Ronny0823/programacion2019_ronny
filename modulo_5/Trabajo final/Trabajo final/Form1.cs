using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Trabajo_final
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void label9_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {

            double calcular;
            var valor1 = Convert.ToDouble(textBox1.Text);
            var valor2 = Convert.ToDouble(textBox2.Text);

            calcular = Math.Sqrt(valor1 * valor1 + valor2 * valor2);

            textBox17.Text = ("Resultado: " + calcular);
         
        }

        private void button2_Click(object sender, EventArgs e)
        {
            double calcularpromedio;
            var nota1 = Convert.ToDouble(textBox3.Text);
            var nota2 = Convert.ToDouble(textBox4.Text);
            var nota3 = Convert.ToDouble(textBox5.Text);
            var nota4 = Convert.ToDouble(textBox6.Text);

            calcularpromedio = (nota1 + nota2 + nota3 + nota4) / 4;

            textBox7.Text = ("Resultado: " + calcularpromedio.ToString()); 

        }

        private void button3_Click(object sender, EventArgs e)
        {
            double calcular;
            var velocidad = Convert.ToDouble(textBox8.Text);
            var horas = Convert.ToDouble(textBox10.Text);

            calcular = (velocidad * horas);
            textBox9.Text = ("Resultado: " + calcular.ToString() + "km");
        }

        private void button4_Click(object sender, EventArgs e)
        {
            double calcular;
            var nacimirnto = Convert.ToDouble(textBox11.Text);
            var año = Convert.ToDouble(textBox12.Text);

            calcular = (nacimirnto - año);
            textBox19.Text = ("Resultado: " + calcular.ToString());


        }

        private void button5_Click(object sender, EventArgs e)
        {
           
            var dia = Convert.ToDouble(textBox14.Text);

            if (dia == 1)
            {
                textBox13.Text = ("Resultado: Lunes");
            }

            else if (dia == 2)
            {
                textBox13.Text = ("Resultado: Martes");
            }

            else if (dia == 3)
            {
                textBox13.Text = ("Resultado: Miercoles");
            }

            else if (dia == 4)
            {
                textBox13.Text = ("Resultado: Jueves");
            }

             else if (dia == 5)
            {
                textBox13.Text = ("Resultado: Viernes");
            }

             else if (dia == 6)
            {
                textBox13.Text = ("Resultado: Sabado");
            }

             else if (dia == 7)
            {
                textBox13.Text = ("Resultado: Domingo");
            }



        }

        private void button6_Click(object sender, EventArgs e)
        {
           
            var año = Convert.ToDouble(textBox16.Text);

            if (año == 1)
            {
                textBox15.Text = ("Resultado: Enero");
            }

            if (año == 2)
            {
                textBox15.Text = ("Resultado: Febrero");
            }

            if (año == 3)
            {
                textBox15.Text = ("Resultado: Marzo");
            }

            if (año == 4)
            {
                textBox15.Text = ("Resultado: Abril");
            }

            if (año == 5)
            {
                textBox15.Text = ("Resultado: Mayo");
            }

            if (año == 6)
            {
                textBox15.Text = ("Resultado: Junio");
            }

            if (año == 7)
            {
                textBox15.Text = ("Resultado: Julio");
            }

            if (año == 8)
            {
                textBox15.Text = ("Resultado: Agosto");
            }

            if (año == 9)
            {
                textBox15.Text = ("Resultado: Septiembre");
            }

            if (año == 10)
            {
                textBox15.Text = ("Resultado: Octubre");
            }

            if (año == 11)
            {
                textBox15.Text = ("Resultado: Noviembre");
            }

            if (año == 12)
            {
                textBox15.Text = ("Resultado: Diciembre");
            }
        }

        private void textBox18_TextChanged(object sender, EventArgs e)
        {

        }

        private void label21_Click(object sender, EventArgs e)
        {

        }

        private void button7_Click(object sender, EventArgs e)
        {
            

            for (var i = 0; i <= 100; i++)
            {
                if (i % 2 == 0)
                {
                    textBox18.Text = ("Resultado: " + i.ToString());
                }
            }
        }
    }
}
