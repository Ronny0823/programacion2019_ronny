using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace moviminto
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
            var keyValue = e.KeyValue;

           

            var posicionX = label1.Location.X;
            var posicionY = label1.Location.Y;

           // MessageBox.Show(posicionX.ToString());
           // MessageBox.Show(posicionY.ToString());


            //1
            if (keyValue == 37 || keyValue == 65)
            {
                if(posicionX <= 22)
                {
                    return;
                }
                else{
                    label1.Location = new System.Drawing.Point(posicionX - 5, posicionY);
                    label3.Text = label1.Location.ToString();
                }
                
                //MessageBox.Show("izquierda");
            }
            //Resetear el juego
            if (keyValue == 82)
            {
                var anchoPadre = label2.Width;
                var anchoHijo = label1.Width;
                var margen = label2.Location.X;

                var alturaPadre = label2.Height;
                var alturaHijo = label1.Height;
                var margenY = label2.Location.Y;

                var centroX = ((anchoPadre + anchoHijo) / 2) - margen;
                var centroY = ((alturaPadre + alturaHijo) / 2) - margen;

                //centrado asoluto al formulario
                 anchoPadre = this.Width;
                 anchoHijo = label1.Width;
               

                 alturaPadre = this.Height;
                 alturaHijo = label1.Height;

                //border
                 var borderX = 18;
                 var borderY = 47;

                 centroX = (anchoPadre / 2) - (anchoHijo / 2) - borderX;
                 centroY = (alturaPadre / 2) - (alturaHijo / 2) - borderY;

                //MessageBox.Show("resetiando el juego");
                label1.Location = new System.Drawing.Point(centroX, centroY);

            }
            
            //cambiando de color
            if (keyValue == 67)
            {
                //MessageBox.Show("cambiando de color");

                var random = new Random();

                //var numeroAleatorio = random.Next(0, 4);

                //colores rba
                var red = random.Next(255);
                var green = random.Next(255);
                var blue = random.Next(255);

                label1.BackColor = Color.FromArgb(red, green, blue);
                label1.BackColor = Color.FromArgb(red, green, blue);


                // Listado de colores
                 //Color[] colores = {Color.Blue, Color.Red, Color.Green, Color.Pink, Color.Peru };

                 //label1.BackColor = colores[numeroAleatorio];

                //MessageBox.Show(colores [numeroAleatorio].ToString());
            }

            //2
            if (keyValue == 39 || keyValue == 68)
            {
                if (posicionX >= 342)
                {
                    return;
                }
                else
                {
                     label1.Location = new System.Drawing.Point(posicionX + 5, posicionY);
                     label3.Text = label1.Location.ToString();
                }
               
                //MessageBox.Show("derecha");
            }

            //3
            if (keyValue == 38 || keyValue == 87)
            {
                if (posicionY <= 20)
                {
                    return;
                }
                else
                {
                    label1.Location = new System.Drawing.Point(posicionX , posicionY - 5);
                    label3.Text = label1.Location.ToString();
                }
                
                //MessageBox.Show("arriba");
            }
            


            //4
            if (keyValue == 40 || keyValue == 83)
            {
                if (posicionY >= 385)
                {
                    return;
                }
                else
                {
                    label1.Location = new System.Drawing.Point(posicionX, posicionY + 5);
                    label3.Text = label1.Location.ToString();
                }
                
                //MessageBox.Show("abajo");
            }

    
        }

        private void Form1_KeyPress(object sender, KeyPressEventArgs e)
        {

        }

        private void Form1_KeyUp(object sender, KeyEventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }
    }
}
