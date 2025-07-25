<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class Form1
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Me.ALAMAT = New System.Windows.Forms.Label()
        Me.NAMA = New System.Windows.Forms.Label()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.ID_USER = New System.Windows.Forms.Label()
        Me.txtid = New System.Windows.Forms.TextBox()
        Me.BtnSimpan = New System.Windows.Forms.Button()
        Me.BtnEdit = New System.Windows.Forms.Button()
        Me.Hapus = New System.Windows.Forms.Button()
        Me.BtnKeluar = New System.Windows.Forms.Button()
        Me.txttlp = New System.Windows.Forms.TextBox()
        Me.txtnama = New System.Windows.Forms.TextBox()
        Me.txtalmt = New System.Windows.Forms.TextBox()
        Me.dg_outlet = New System.Windows.Forms.DataGridView()
        Me.BackgroundWorker1 = New System.ComponentModel.BackgroundWorker()
        CType(Me.dg_outlet, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'ALAMAT
        '
        Me.ALAMAT.AutoSize = True
        Me.ALAMAT.Location = New System.Drawing.Point(82, 108)
        Me.ALAMAT.Name = "ALAMAT"
        Me.ALAMAT.Size = New System.Drawing.Size(73, 20)
        Me.ALAMAT.TabIndex = 1
        Me.ALAMAT.Text = "ALAMAT"
        '
        'NAMA
        '
        Me.NAMA.AutoSize = True
        Me.NAMA.Location = New System.Drawing.Point(82, 67)
        Me.NAMA.Name = "NAMA"
        Me.NAMA.Size = New System.Drawing.Size(55, 20)
        Me.NAMA.TabIndex = 2
        Me.NAMA.Text = "NAMA" & Global.Microsoft.VisualBasic.ChrW(13) & Global.Microsoft.VisualBasic.ChrW(10)
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(82, 153)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(82, 20)
        Me.Label4.TabIndex = 4
        Me.Label4.Text = "TELEPON"
        '
        'ID_USER
        '
        Me.ID_USER.AutoSize = True
        Me.ID_USER.Location = New System.Drawing.Point(82, 29)
        Me.ID_USER.Name = "ID_USER"
        Me.ID_USER.Size = New System.Drawing.Size(81, 20)
        Me.ID_USER.TabIndex = 5
        Me.ID_USER.Text = "ID_USER"
        '
        'txtid
        '
        Me.txtid.Location = New System.Drawing.Point(200, 29)
        Me.txtid.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.txtid.Name = "txtid"
        Me.txtid.Size = New System.Drawing.Size(135, 26)
        Me.txtid.TabIndex = 6
        '
        'BtnSimpan
        '
        Me.BtnSimpan.Location = New System.Drawing.Point(386, 29)
        Me.BtnSimpan.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.BtnSimpan.Name = "BtnSimpan"
        Me.BtnSimpan.Size = New System.Drawing.Size(101, 27)
        Me.BtnSimpan.TabIndex = 7
        Me.BtnSimpan.Text = "SIMPAN"
        Me.BtnSimpan.UseVisualStyleBackColor = True
        '
        'BtnEdit
        '
        Me.BtnEdit.Location = New System.Drawing.Point(386, 68)
        Me.BtnEdit.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.BtnEdit.Name = "BtnEdit"
        Me.BtnEdit.Size = New System.Drawing.Size(101, 27)
        Me.BtnEdit.TabIndex = 8
        Me.BtnEdit.Text = "EDIT"
        Me.BtnEdit.UseVisualStyleBackColor = True
        '
        'Hapus
        '
        Me.Hapus.Location = New System.Drawing.Point(386, 108)
        Me.Hapus.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.Hapus.Name = "Hapus"
        Me.Hapus.Size = New System.Drawing.Size(101, 27)
        Me.Hapus.TabIndex = 9
        Me.Hapus.Text = "HAPUS"
        Me.Hapus.UseVisualStyleBackColor = True
        '
        'BtnKeluar
        '
        Me.BtnKeluar.Location = New System.Drawing.Point(386, 154)
        Me.BtnKeluar.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.BtnKeluar.Name = "BtnKeluar"
        Me.BtnKeluar.Size = New System.Drawing.Size(101, 25)
        Me.BtnKeluar.TabIndex = 10
        Me.BtnKeluar.Text = "KELUAR"
        Me.BtnKeluar.UseVisualStyleBackColor = True
        '
        'txttlp
        '
        Me.txttlp.Location = New System.Drawing.Point(200, 155)
        Me.txttlp.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.txttlp.Name = "txttlp"
        Me.txttlp.Size = New System.Drawing.Size(135, 26)
        Me.txttlp.TabIndex = 11
        '
        'txtnama
        '
        Me.txtnama.Location = New System.Drawing.Point(200, 67)
        Me.txtnama.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.txtnama.Name = "txtnama"
        Me.txtnama.Size = New System.Drawing.Size(135, 26)
        Me.txtnama.TabIndex = 12
        '
        'txtalmt
        '
        Me.txtalmt.Location = New System.Drawing.Point(200, 110)
        Me.txtalmt.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.txtalmt.Name = "txtalmt"
        Me.txtalmt.Size = New System.Drawing.Size(135, 26)
        Me.txtalmt.TabIndex = 13
        '
        'dg_outlet
        '
        Me.dg_outlet.AccessibleName = ""
        Me.dg_outlet.AllowUserToDeleteRows = False
        Me.dg_outlet.BackgroundColor = System.Drawing.SystemColors.ControlLightLight
        Me.dg_outlet.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.dg_outlet.Location = New System.Drawing.Point(12, 197)
        Me.dg_outlet.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.dg_outlet.Name = "dg_outlet"
        Me.dg_outlet.RowHeadersWidth = 62
        Me.dg_outlet.Size = New System.Drawing.Size(616, 142)
        Me.dg_outlet.TabIndex = 14
        '
        'BackgroundWorker1
        '
        '
        'Form1
        '
        Me.AccessibleName = ""
        Me.AutoScaleDimensions = New System.Drawing.SizeF(9.0!, 20.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackColor = System.Drawing.SystemColors.ActiveCaption
        Me.ClientSize = New System.Drawing.Size(695, 373)
        Me.ControlBox = False
        Me.Controls.Add(Me.dg_outlet)
        Me.Controls.Add(Me.txtalmt)
        Me.Controls.Add(Me.txtnama)
        Me.Controls.Add(Me.txttlp)
        Me.Controls.Add(Me.BtnKeluar)
        Me.Controls.Add(Me.Hapus)
        Me.Controls.Add(Me.BtnEdit)
        Me.Controls.Add(Me.BtnSimpan)
        Me.Controls.Add(Me.txtid)
        Me.Controls.Add(Me.ID_USER)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.NAMA)
        Me.Controls.Add(Me.ALAMAT)
        Me.ForeColor = System.Drawing.SystemColors.ActiveCaptionText
        Me.Margin = New System.Windows.Forms.Padding(3, 2, 3, 2)
        Me.Name = "Form1"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "DATA OUTLET"
        CType(Me.dg_outlet, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents ALAMAT As Label
    Friend WithEvents NAMA As Label
    Friend WithEvents Label4 As Label
    Friend WithEvents ID_USER As Label
    Friend WithEvents txtid As TextBox
    Friend WithEvents BtnSimpan As Button
    Friend WithEvents BtnEdit As Button
    Friend WithEvents Hapus As Button
    Friend WithEvents BtnKeluar As Button
    Friend WithEvents txttlp As TextBox
    Friend WithEvents txtnama As TextBox
    Friend WithEvents txtalmt As TextBox
    Friend WithEvents dg_outlet As DataGridView
    Public WithEvents BackgroundWorker1 As System.ComponentModel.BackgroundWorker

    Private Sub ALAMAT_Click(sender As Object, e As EventArgs) Handles ALAMAT.Click

    End Sub

    Private Sub NAMA_Click(sender As Object, e As EventArgs) Handles NAMA.Click

    End Sub

    Private Sub Label4_Click(sender As Object, e As EventArgs) Handles Label4.Click

    End Sub

    Private Sub ID_USER_Click(sender As Object, e As EventArgs) Handles ID_USER.Click

    End Sub

    Private Sub txttlp_TextChanged(sender As Object, e As EventArgs) Handles txttlp.TextChanged

    End Sub

    Private Sub txtnama_TextChanged(sender As Object, e As EventArgs) Handles txtnama.TextChanged

    End Sub

    Private Sub txtalmt_TextChanged(sender As Object, e As EventArgs) Handles txtalmt.TextChanged

    End Sub

    Private Sub BackgroundWorker1_DoWork(sender As Object, e As System.ComponentModel.DoWorkEventArgs) Handles BackgroundWorker1.DoWork

    End Sub
End Class