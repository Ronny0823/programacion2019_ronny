namespace Ejercicio
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador requerida.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén utilizando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido del método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.txtVerificar = new System.Windows.Forms.Button();
            this.txtBuscador = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.numeroRojo = new System.Windows.Forms.NumericUpDown();
            this.numeroVerde = new System.Windows.Forms.NumericUpDown();
            this.numeroAzul = new System.Windows.Forms.NumericUpDown();
            this.colorR1 = new System.Windows.Forms.TrackBar();
            this.colorG2 = new System.Windows.Forms.TrackBar();
            this.colorB3 = new System.Windows.Forms.TrackBar();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.button1 = new System.Windows.Forms.Button();
            this.progressBar1 = new System.Windows.Forms.ProgressBar();
            this.progressBar2 = new System.Windows.Forms.ProgressBar();
            this.progressBar3 = new System.Windows.Forms.ProgressBar();
            ((System.ComponentModel.ISupportInitialize)(this.numeroRojo)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.numeroVerde)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.numeroAzul)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.colorR1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.colorG2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.colorB3)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Segoe UI", 9.75F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(12, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(57, 17);
            this.label1.TabIndex = 0;
            this.label1.Text = "Numero";
            // 
            // txtVerificar
            // 
            this.txtVerificar.BackColor = System.Drawing.SystemColors.HotTrack;
            this.txtVerificar.Cursor = System.Windows.Forms.Cursors.AppStarting;
            this.txtVerificar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.txtVerificar.Font = new System.Drawing.Font("Segoe UI", 9.75F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtVerificar.Location = new System.Drawing.Point(134, 28);
            this.txtVerificar.Name = "txtVerificar";
            this.txtVerificar.Size = new System.Drawing.Size(75, 23);
            this.txtVerificar.TabIndex = 1;
            this.txtVerificar.Text = "Verificar";
            this.txtVerificar.UseVisualStyleBackColor = false;
            this.txtVerificar.Click += new System.EventHandler(this.txtVerificar_Click);
            // 
            // txtBuscador
            // 
            this.txtBuscador.Location = new System.Drawing.Point(15, 28);
            this.txtBuscador.Name = "txtBuscador";
            this.txtBuscador.Size = new System.Drawing.Size(100, 20);
            this.txtBuscador.TabIndex = 2;
            this.txtBuscador.TextChanged += new System.EventHandler(this.textBox1_TextChanged);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Segoe UI", 9.75F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(62, 64);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(152, 17);
            this.label2.TabIndex = 3;
            this.label2.Text = "Cambiar color de fondo";
            // 
            // numeroRojo
            // 
            this.numeroRojo.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.numeroRojo.Location = new System.Drawing.Point(90, 84);
            this.numeroRojo.Maximum = new decimal(new int[] {
            255,
            0,
            0,
            0});
            this.numeroRojo.Name = "numeroRojo";
            this.numeroRojo.Size = new System.Drawing.Size(120, 20);
            this.numeroRojo.TabIndex = 4;
            // 
            // numeroVerde
            // 
            this.numeroVerde.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.numeroVerde.Location = new System.Drawing.Point(91, 134);
            this.numeroVerde.Maximum = new decimal(new int[] {
            255,
            0,
            0,
            0});
            this.numeroVerde.Name = "numeroVerde";
            this.numeroVerde.Size = new System.Drawing.Size(120, 20);
            this.numeroVerde.TabIndex = 5;
            // 
            // numeroAzul
            // 
            this.numeroAzul.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.numeroAzul.Cursor = System.Windows.Forms.Cursors.Default;
            this.numeroAzul.Location = new System.Drawing.Point(91, 183);
            this.numeroAzul.Maximum = new decimal(new int[] {
            255,
            0,
            0,
            0});
            this.numeroAzul.Name = "numeroAzul";
            this.numeroAzul.Size = new System.Drawing.Size(120, 20);
            this.numeroAzul.TabIndex = 6;
            this.numeroAzul.ValueChanged += new System.EventHandler(this.numericUpDown3_ValueChanged);
            // 
            // colorR1
            // 
            this.colorR1.AutoSize = false;
            this.colorR1.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.colorR1.Cursor = System.Windows.Forms.Cursors.Help;
            this.colorR1.Location = new System.Drawing.Point(237, 83);
            this.colorR1.Maximum = 255;
            this.colorR1.Name = "colorR1";
            this.colorR1.Size = new System.Drawing.Size(326, 21);
            this.colorR1.TabIndex = 7;
            this.colorR1.Scroll += new System.EventHandler(this.colorR1_Scroll);
            // 
            // colorG2
            // 
            this.colorG2.AutoSize = false;
            this.colorG2.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.colorG2.Cursor = System.Windows.Forms.Cursors.Help;
            this.colorG2.Location = new System.Drawing.Point(237, 134);
            this.colorG2.Maximum = 255;
            this.colorG2.Name = "colorG2";
            this.colorG2.Size = new System.Drawing.Size(326, 21);
            this.colorG2.TabIndex = 8;
            this.colorG2.Scroll += new System.EventHandler(this.colorG2_Scroll);
            // 
            // colorB3
            // 
            this.colorB3.AutoSize = false;
            this.colorB3.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.colorB3.Cursor = System.Windows.Forms.Cursors.Help;
            this.colorB3.Location = new System.Drawing.Point(237, 183);
            this.colorB3.Maximum = 255;
            this.colorB3.Name = "colorB3";
            this.colorB3.Size = new System.Drawing.Size(326, 20);
            this.colorB3.TabIndex = 9;
            this.colorB3.Scroll += new System.EventHandler(this.colorB3_Scroll);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label3.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(66, 83);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(18, 19);
            this.label3.TabIndex = 10;
            this.label3.Text = "R";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label4.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(65, 133);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(19, 19);
            this.label4.TabIndex = 11;
            this.label4.Text = "G";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label5.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.Location = new System.Drawing.Point(67, 183);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(18, 19);
            this.label5.TabIndex = 12;
            this.label5.Text = "B";
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.SystemColors.HotTrack;
            this.button1.Cursor = System.Windows.Forms.Cursors.WaitCursor;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.button1.Font = new System.Drawing.Font("Segoe UI Black", 9.75F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.Location = new System.Drawing.Point(65, 225);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(146, 23);
            this.button1.TabIndex = 13;
            this.button1.Text = "Cambiar color";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // progressBar1
            // 
            this.progressBar1.Location = new System.Drawing.Point(237, 94);
            this.progressBar1.Maximum = 255;
            this.progressBar1.Name = "progressBar1";
            this.progressBar1.Size = new System.Drawing.Size(326, 10);
            this.progressBar1.TabIndex = 14;
            // 
            // progressBar2
            // 
            this.progressBar2.Location = new System.Drawing.Point(237, 145);
            this.progressBar2.Maximum = 255;
            this.progressBar2.Name = "progressBar2";
            this.progressBar2.Size = new System.Drawing.Size(326, 10);
            this.progressBar2.TabIndex = 15;
            // 
            // progressBar3
            // 
            this.progressBar3.Location = new System.Drawing.Point(237, 193);
            this.progressBar3.Maximum = 255;
            this.progressBar3.Name = "progressBar3";
            this.progressBar3.Size = new System.Drawing.Size(326, 10);
            this.progressBar3.TabIndex = 16;
            // 
            // Form1
            // 
            this.AcceptButton = this.txtVerificar;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(575, 293);
            this.Controls.Add(this.progressBar3);
            this.Controls.Add(this.progressBar2);
            this.Controls.Add(this.progressBar1);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.colorB3);
            this.Controls.Add(this.colorG2);
            this.Controls.Add(this.colorR1);
            this.Controls.Add(this.numeroAzul);
            this.Controls.Add(this.numeroVerde);
            this.Controls.Add(this.numeroRojo);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtBuscador);
            this.Controls.Add(this.txtVerificar);
            this.Controls.Add(this.label1);
            this.Name = "Form1";
            this.Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)(this.numeroRojo)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.numeroVerde)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.numeroAzul)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.colorR1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.colorG2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.colorB3)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button txtVerificar;
        private System.Windows.Forms.TextBox txtBuscador;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.NumericUpDown numeroRojo;
        private System.Windows.Forms.NumericUpDown numeroVerde;
        private System.Windows.Forms.NumericUpDown numeroAzul;
        private System.Windows.Forms.TrackBar colorR1;
        private System.Windows.Forms.TrackBar colorG2;
        private System.Windows.Forms.TrackBar colorB3;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.ProgressBar progressBar1;
        private System.Windows.Forms.ProgressBar progressBar2;
        private System.Windows.Forms.ProgressBar progressBar3;
    }
}

